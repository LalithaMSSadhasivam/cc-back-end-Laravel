<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return User::all();
    }

    // 3.1 Function defintion with reference to route -
    public function user(Request $request){
        return $request->user();
    }

    // 4.1 Register User
    public function register(UserRegisterRequest $request){
        User::create([
            'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            // 'service_url' => $request->service_url
        ]);

    return 'User Created Successfully';

    }
}
