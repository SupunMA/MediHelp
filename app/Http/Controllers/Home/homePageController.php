<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

use App\Models\Plan;

class homePageController extends Controller
{
    
    
    public function index()
    {
        $bdata = plan::all();
        //dd($bdata);
        return view('Home.welcome',compact('bdata'));
        
    }

    
    public function register2()
    {
        $branch = plan::all();
        // dd($branch);
        return view('auth.register',compact('branch'));
        
    }

   
}