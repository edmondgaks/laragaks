<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:6'
        ]);
        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        // Create User
        $user = User::create($formFields);
        // Login User
        auth()->login($user);
        return redirect('/')->with('message','User created and logged in successfully');
    }
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','You have been logged out successfully');
    }
    public function login(Request $request) {
        
    }
}
