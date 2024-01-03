<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminLogin; // Update the use statement
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function AdminLogin()
    {
        return view('Admin.AdminLogin');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if ((['email' => $email, 'password' => $password])) {
            $user = AdminLogin::where('email', $email)->first();
            $user = AdminLogin::where('password', $password)->first();

            if ($user && $user->password === $password) {
                // Password is correct
                // Manually log in the user
                // You may store the user ID in the session or perform any other necessary tasks
                session(['user' => $user]);
            
                return redirect()->route('Admin.Adminhome')->with('success', 'Hello Admin');
            } else {
                // Invalid credentials
                return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password']);
            }
        }
        
    }
}
