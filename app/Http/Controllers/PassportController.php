<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\User;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        if ($user) {
            return response()->json('User created Successfully');
        }

    }

    public function login(Request $request)
    {
        if (auth()->attempt($request->all())) {
            $user = auth()->user();
            $token = $user->createToken('baseline')->accessToken;
            return response()->json([
                'user' => $user,
                'token' => $token,
            ]);
        } else {
            return response()->json('Invalid Credentials');
        }
    }

    public function logout()
    {
        if (auth()->check()) {
            auth()->user()->token()->delete();
            return response()->json('Successfully logged out');
        }
    }
}
