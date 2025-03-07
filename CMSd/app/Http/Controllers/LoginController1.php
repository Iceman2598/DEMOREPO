<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\Login;
use App\Mail\OtpMail;

class LoginController1 extends Controller
{
    public function handleRegistration1(Request $request)
    {
        if ($request->action == 'send_otp') {
            $request->validate([
                'email' => 'required|string|email|unique:login,email',
            ]);

            $otp = rand(100000, 999999);

            // Store OTP temporarily in session
            Session::put('otp', $otp);
            Session::put('registration_data', $request->all());

            // Send OTP email using the OtpMail mailable class
            Mail::to($request->email)->send(new OtpMail($otp));

            return back()->with('message', 'OTP sent to your email.');
        }

        if ($request->action == 'verify_otp') {
            $request->validate([
                'otp' => 'required|numeric',
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            $otp = Session::get('otp');
            $registration_data = Session::get('registration_data');

            if ($request->otp == $otp) {
                // Store user data in the login table
                Login::create([
                    'email' => $registration_data['email'],
                    'password' => Hash::make($registration_data['password']),
                    'otp' => $otp,
                    'rights' => 'U', // Default role is 'U'
                    'active' => true,
                    'createdby' => $registration_data['createdby'] ?? null,
                    'updatedby' => $registration_data['updatedby'] ?? null,
                ]);

                Session::forget(['otp', 'registration_data']);

                return redirect()->route('author.profile');
            } else {
                return back()->withErrors(['otp' => 'Invalid OTP']);
            }
        }

        return back();
    }
    public function showProfile()
    {
        return view('author.profile');
    }
}
