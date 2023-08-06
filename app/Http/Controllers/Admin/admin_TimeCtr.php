<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Plan;
use App\Models\Slot;
use App\Models\Timetable;
use App\Models\Payment;




class admin_TimeCtr extends Controller
{
   //protected $task;
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


//Dashboard
    public function allTimeTable()
    {
        $coaches=User::where('users.role',2)->get();
        $clients=User::where('users.role',0)->get();
        $slots=Slot::all();
        $timeTables=Timetable::all();
        
        // dd($payment);
        return view('Users.Admin.Timetable.allTime',compact('coaches','slots','timeTables','clients'));

    }

    public function allRatings()
    {
        $coaches=User::where('users.role',2)->get();
        $timeTables=Timetable::all();
        // dd($payment);
        return view('Users.Admin.CoachRatings.AllRating',compact('coaches','timeTables'));
    }
    
}
