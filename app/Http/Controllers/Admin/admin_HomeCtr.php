<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Plan;
use App\Models\Payment;
use App\Models\User;
use App\Models\Test;

use Auth;

class admin_HomeCtr extends Controller
{
   //protected $task;
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


//Dashboard
    public function checkAdmin()
    {
       


        $ClientsCount   =   User::where('users.role',0)->count();
        $TestCount     =   Test::where('tests.done',0)->count();
        $DoctorCount     =   User::where('users.role',2)->count();
        



        $allReportData = User::join('patients', 'patients.userID', '=', 'users.id')
        ->join('tests', 'tests.pid', '=', 'patients.pid')
        ->join('available_tests', 'available_tests.tlid', '=', 'tests.tlid')
        ->join('reports', 'reports.tid', '=', 'tests.tid')
        ->select('users.*', 'tests.*', 'available_tests.*','reports.*')
        ->where('tests.done','=', 1)
        ->get();

        

        
        // $ManagerCount   =   User::where('users.role',3)->count();
        // $PlanCount=Plan::count();

        // $AllPlans       = Plan::all();
        // $AllPayments    = Payment::all();
        return view('Users.Admin.home',compact('ClientsCount','DoctorCount','TestCount','allReportData'));
    }

}