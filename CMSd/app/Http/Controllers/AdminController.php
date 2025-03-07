<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $result = DB::table('login')
            ->where('email', $username)
            ->where('active', 1)
            ->first();

        if ($result && Hash::check($password, $result->password)) {
            Session::put('username', $username);
            Session::put('rights', $result->rights);
            Session::put('message', null);
            Session::put('login', 1);

            return redirect($result->rights === 'SA' ? 'admin/dashboard' : 'admin/sample');
        } else {
            Session::flush();
            return redirect('login')->with('error', 'Wrong Username or Password');
        }
    }
}
