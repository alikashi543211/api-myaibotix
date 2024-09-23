<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $inputs = sanitizeInputWithAllowedTags($request->all());

        // Validate input fields
        $validation = Validator::make($inputs, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        if ($validation->fails()) {
            $response = [
                'success' => false,
                'message' => $validation->errors()->first()
            ];
            return response()->json($response, 201);
        }

        $user = User::create([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'password' => Hash::make($inputs['password']),
        ]);

        $response = [
            'success' => true,
            'message' => "Registration successful."
        ];
        return response()->json($response, 201);
    }

    public function login(Request $request)
    {
        $inputs = sanitizeInputWithAllowedTags($request->all());

        // Validate input fields
        $validation = Validator::make($inputs, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validation->fails()) {
            $response = [
                'success' => false,
                'message' => $validation->errors()->first()
            ];
            return response()->json($response, 201);
        }
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {

            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'success' => true,
            'user' => $user,
            'access_token' => $token,
            'message' => 'Login successful',
        ], Response::HTTP_OK);
    }

    public function logout()
    {
        $user = User::whereId(Auth::user()->id)->first();
        $user->tokens()->delete();
        return response()->json([
            'success' => true,
            'message' => 'Logout successful',
        ], Response::HTTP_OK);
    }
}
