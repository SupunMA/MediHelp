<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;



class homePageController extends Controller
{
    
    
    public function index()
    {
       
        return view('Home.welcome');
        
    }

    
    public function register2()
    {
       
        return view('auth.register');
        
    }

   
}