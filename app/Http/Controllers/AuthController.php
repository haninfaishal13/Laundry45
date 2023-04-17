<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required'],
            'password' => ['required']
        ]);
        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }
        $credentials = $request->only('email', 'password');
        return $this->auth_process($credentials, 'login');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'unique:users,email'],
            'name' => ['required'],
            'password' => ['required']
        ]);
        if($validator->fails()) {
            $errors = [];
            foreach($validator->errors()->messages() as $error) {
                foreach($error as $err) {
                    array_push($errors, $err);
                }
            }
            return response()->json([
                'success' => false,
                'message' => $errors
            ], 422);
        }
        User::create([
            'email'    => $request->email,
            'name'     => $request->name,
            'password' => bcrypt($request->password),
            'role'     => 'kasir',
        ]);
        $credentials = $request->only('email', 'password');
        return $this->auth_process($credentials, 'register');
    }

    public function logout(Request $request)
    {
        try {
            $request->session()->flush();
            Auth::logout();
            return response()->json([
                'success' => true,
                'message' => 'Success logout'
            ]);
        } catch(Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Fail logout'
            ]);
        }
    }

    protected static function auth_process($credentials, $method)
    {
        if($method == 'register') {
            if(Auth::attempt($credentials)) {
                return response()->json([
                    'success' => true,
                    'message' => 'Register Berhasil',
                    'data'
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan'
            ]);
        } else {
            if(Auth::attempt($credentials)) {
                $user = Auth::user();
                return response()->json([
                    'success' => true,
                    'message' => 'Sukses Login',
                    'data' => [
                        'name' => $user->name,
                        'role' => $user->role
                    ]
                    ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'Email atau password salah'
            ]);
        }

    }
}
