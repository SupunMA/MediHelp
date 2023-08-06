<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Plan;

use Carbon\Carbon;



class admin_PaymentCtr extends Controller
{
   //protected $task;

  

    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


//Land

    public function pendingPaymentList()
    {
        $clients=User::where('users.role',0)->get();
        $payments=Payment::where('payments.confirm',0)->get();
        $plans=Plan::all();
        return view('Users.Admin.Payment.pendingPayment',compact('clients','payments','plans'));
    }

    public function approvePayment(Request $request)
    {
        //dd($data);


        // $request->validate([
        //     'name' => ['required', 'string', 'max:255']
        // ]);
        $test= $request->paymentIdHidden;

        Payment::where('paymentID', $request->paymentIdHidden)
        ->update([
                    'confirm' => $request->$test
                ]);

        return redirect()->back()->with('message','successful');


    }

    public function approvedPayment()
    {
        $clients=User::where('users.role',0)->get();
        $payments=Payment::where('payments.confirm',1)->get();
        $plans=Plan::all();
        return view('Users.Admin.Payment.approvedPayment',compact('clients','payments','plans'));
    }

    public function DeclinedPayment()
    {
        $clients=User::where('users.role',0)->get();
        $payments=Payment::where('payments.confirm',2)->get();
        $plans=Plan::all();
        return view('Users.Admin.Payment.declinedPayment',compact('clients','payments','plans'));
    }


    
    public function currentMonthTable()
    {
        //Used Carbon Library
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        $clients=User::where('users.role',0)->get();
        $payments=Payment::where('payments.confirm',1)->whereRaw('MONTH(payDate) = ?', [$currentMonth])->whereRaw('YEAR(payDate) = ?', [$currentYear])->get();
        $plans=Plan::all();
        return view('Users.Admin.Payment.currentMonth',compact('clients','payments','plans'));
    }


    // public function allLand()
    // {
    //     //$clients=User::where('users.role',0)->get(['id', 'name','NIC']);
    //     $landsAndClients = Land::join('users','users.id','=','lands.ownerID')
    //     ->where('users.role',0)->get(['users.id', 'users.name','users.NIC','lands.*']);
    //     //->join('table1','table1.id','=','table3.id');
    //     return view('Users.Admin.Lands.allLands',compact('landsAndClients'));
    // }

    // public function addingLand(Request $data)
    // {
    //      $data->validate([
    //         'ownerID' =>'required',
    //         'landValue' =>'required','min:100000','max:10000000'
    //      ]);
    //     $user = Land::create($data->all());
    //     return redirect()->back()->with('message','successful');
    //     //->route('your_url_where_you_want_to_redirect');
    // }

    // public function deleteLand($landID)
    // {
    //     //dd($branchID);
    //     $delete = Land::find($landID);
    //     $delete->delete();
    //     return redirect()->back()->with('message','successful');
    // }

    // public function updateLand(Request $data)
    // {
    //     $data->validate([
    //         'landValue' =>'required','min:100000','max:10000000',
    //      ]);
    //     Land::where('landID', $data->landID)
    //     ->update(['landValue' => $data->landValue,
    //             'landDetails' => $data->landDetails,
    //             'landMap' => $data->landMap,
    //             'landAddress' => $data->landAddress
    //         ]);
    //     return redirect()->back()->with('message','successful');
    // }




}
