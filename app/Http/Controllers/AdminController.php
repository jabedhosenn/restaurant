<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addFood()
    {
        // Logic to show the form for adding food items
        return view('admin.addfood');
    }
}
