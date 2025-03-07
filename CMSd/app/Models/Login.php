<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $table = 'login';

    protected $fillable = [
        'email',
        'password',
        'otp',
        'salt',
        'rights',
        'active',
        'createdby',
        'updatedby'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
