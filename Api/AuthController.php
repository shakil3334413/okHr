<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;

class AuthController extends Controller
{

    
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|',
            'email' => 'required|string|email|unique:users',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        if($user){
            $token = $user->createToken('token')->accessToken;
            // return $this->sendResponse($success);
            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => $user,
                'message' => "Registration successfull.."
            ],201);
        }
        else{
            $error = "Sorry! Registration is not successfull.";
            return response()->json([
                'success' => false,
                'message' => "Sorry! Registration is not successfull."
            ],401);
        }
        
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ],400);
        }

        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials)){
            $error = "Unauthorized";
            return response()->json([
                'success' => false,
                'message' => $error
            ],400);
        }
        $user = Auth::user();
        $token=  $user->createToken('token')->accessToken;
        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => $user 
        ],200);
    }

    //logout
    public function logout()
    {
        
        $isUser = Auth::user()->token()->revoke();
        if($isUser){
            return response()->json([
                'success' => true,
                'message' => "Successfully logged out."
            ],200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => "Something went wrong."
            ],400);
        }
            
        
    }

    //getuser
    public function getUser()
    {
        $user = Auth::user();
        if($user){
            return response()->json([
                'success' => true,
                'user' => $user
            ],200);
        }
        else{
            $error = "user not found";
            return response()->json([
                'success' => true,
                'message' => $error
            ],400);
        }
    }

}
