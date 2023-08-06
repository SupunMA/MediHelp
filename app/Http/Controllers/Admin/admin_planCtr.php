<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;



class admin_planCtr extends Controller
{
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


//Plans

    public function addPlan()
    {
        return view('Users.Admin.Plan.AddNewPlan');
    }
    
    public function allPlan()
    {
        $bdata = plan::all();
        return view('Users.Admin.Plan.AllPlans',compact('bdata'));
    }

    public function addingPlan(Request $data)
    {
         $data->validate([
            'planName' =>['required','string'],
            'planPrice' =>['required','integer'],
            'planMonth' =>['required','integer']

         ]);
        $user = Plan::create($data->all());
        return redirect()->back()->with('message','successful');
        //->route('your_url_where_you_want_to_redirect');
    }

    public function deletePlan($planID)
    {
        
        $delete = Plan::find($planID);
        $delete->delete();
        return redirect()->back()->with('message','successful');
    }

    public function updatePlan(Request $data)
    {
        $data->validate([
            'planName' =>'required',
            'planPrice' =>'required',
            'planMonth' =>'required'

         ]);
        Plan::where('planID', $data->planID)
        ->update(['planName' => $data->planName,
                'planPrice' => $data->planPrice,
                'planMonth' => $data->planMonth
            ]);
        return redirect()->back()->with('message','successful');
    }
    
}
