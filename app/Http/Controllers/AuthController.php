<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $response = [
                'success' => true,
                'message' => 'Login successful',
                'user' => $user,
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Invalid username or password',
            ];
        }

        return response()->json($response);
    }
}
