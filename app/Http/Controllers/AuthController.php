<?php

namespace App\Http\Controllers;

use App\Package\pengunjung\Model\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function user(Request $request){

        return response()->json(
            $request->user()
        );

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Pengunjung::where('email', $request->email)->first();

        $res = !$user || !Hash::check($request->password, $user->passwordHash);

        if ($res) {
            return response('Login invalid', 503);
        }

        $token = $user->createToken("token")->plainTextToken;

        return response()
            ->json([
                'message' => 'Hi ' . $user->name . ', welcome to home',
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
