<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function userRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $validator->validate();
        $user = new User($validator->validated());
        $user->save();
        return response()->json([
            'user' => $user
        ]);
    }
    public function userLogin(Request $request)
    {
        $validator = validator($request->all(), [
            'email' => 'required|email',
            'password' => 'required',

        ]);
        if ($validator->fails()) {
            return  $this->errorResponse($validator->errors()->first(), 422);
        }

        $user = User::query()->where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->getAttribute('password'))) {
            $token = $user->createToken($request->ip())->plainTextToken;

            return response()->json([
                'token' => $token,
            ]);
        }
    }
    public function UserLogout()
    {
        request()->user()->tokens()->delete();
    }
}
