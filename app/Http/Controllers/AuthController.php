<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    /** Abstract Login method that returns login page */
    final public function login()
    {
        return view('auth.login');
    }

    /** Abstract Authentificate method that test user's information and then authenticate the user */
    final public function authentificate(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('e-commerce');
        } else {
            return redirect()->route('login')->with(['error' => 'Unable To Connect']);
        }
    }

    /** logout user from session */
    final public function logout()
    {

        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }

    /** Abstract Authentificate method that returns a sign up page */
    final public function register()
    {
        return view('auth.register');
    }

    /** adds a user to the database if the validation is succeded */
    final public function add(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            're_pass' => 'required|min:8|same:password',
        ]);
        if ($validate) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials);

            return redirect()->route('home');
        }
    }
}
