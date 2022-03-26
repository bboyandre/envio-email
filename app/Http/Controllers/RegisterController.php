<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showform()
    {
        return view('pages.index')
    }
    
}
