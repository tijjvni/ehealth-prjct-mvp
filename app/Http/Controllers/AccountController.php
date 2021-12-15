<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\LoginRequest;

class AccountController extends Controller
{
    use ApiResponse;

    public function register(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $attr['name'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email']
        ]);

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken
        ],'Account created successfully.');
    }


    public function login(LoginRequest $request)
    {

        if (!Auth::attempt($request->only(['email','password']))) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ],'Logged in successfully. Token generated');
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return $this->success([],'Logged out. Token Revoked');        
    }
    
}
