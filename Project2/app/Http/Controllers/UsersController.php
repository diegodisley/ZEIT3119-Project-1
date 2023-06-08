<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function ViewAccount(){
        $user = Auth::user();
        return view('ViewAccount', ['user' => $user]);
    }
   
    public function register(){
        return view('register');
    }
    public function store(Request $request)
    {
        // Create the user
        $user = User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'DoB' => $request->dob,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect the user to their dashboard
        return redirect()->route('homepage');
    }

    public function EditAccount(){
        $user = Auth::user();
        return view('EditAccount', ['user' => $user]);
    }

    public function update(Request $request)
{
    // Find the user
    $user = Auth::user();

    // Update user details if they have entries in the request
    if ($request->filled('firstName')) {
        $user->first_name = $request->input('firstName');
    }

    if ($request->filled('lastName')) {
        $user->last_name = $request->input('lastName');
    }

    if ($request->filled('dob')) {
        $user->DoB = $request->input('dob');
    }

    if ($request->filled('email')) {
        $user->email = $request->input('email');
    }

    // Save the changes
    $user->save();

    // Redirect to a page of your choice
    return redirect()->route('ViewAccount');
    }

    public function index(){
        return view('index');
    }

    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->route('homepage');
        } else {
            // Invalid email or password
            return back()->withErrors([
                'message' => 'Invalid email or password.',
            ]);
        }
    }

    public function logout()
    {
    Auth::logout();
    Session::flush();
    return redirect()->route('index');
    }
}
