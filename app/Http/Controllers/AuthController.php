<?php

namespace App\Http\Controllers;

use App\Models\User;
use AuthLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Resource name
    protected $resourceName = 'user';

    public function __construct()
    {
        
    }

    public function login(AuthLoginRequest $request) {
        $user = User::where('username', '=', $request->input('username'))->first();

        if ($user !== null && Hash::check($request->input('password'), $user->password) === true) {

            $token = $user->createToken('user_token')->plainTextToken;

            
            return response()->json([$token], 200);
        }
    }
}
