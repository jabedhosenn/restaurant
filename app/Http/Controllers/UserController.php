<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        // Check if the user is authenticated
        return view('home');
    }
    public function gofile()
    {
        return view('admin.adminfile');
    }
    public function home()
    {
        // Check if the user is authenticated
        if (Auth::id() && Auth::user()->usertype === 'admin') {
            // Return the dashboard view
            return view('admin.dashboard');
        }
        else if (Auth::id() && Auth::user()->usertype === 'user') {
            // Return the user dashboard view
            return view('dashboard');
        }

        // If not authenticated, redirect to the login page
        return redirect()->route('login');
    }
}
