<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\User;
use App\Models\AvailableTest;



class admin_AvailableTestCtr extends Controller
{
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


    //Client

    public function addAvailableTest()
    {
        return view('Users.Admin.AvailableTests.AddNewTest');
    }

    public function addingAvailableTest(Request $data)
    {
         $data->validate([
            'AvailableTestName' =>['required','string'],
            'AvailableTestRange' =>['required','string']
            
         ]);
        $AvailableTest = AvailableTest::create($data->all());
        return redirect()->back()->with('message','successful');
        //->route('your_url_where_you_want_to_redirect');
    }


    public function allAvailableTest()
    {
       
        $AvailableTests=AvailableTest::all();
       
        return view('Users.Admin.AvailableTests.AllTests',compact('AvailableTests'));
    }
    
    public function deleteAvailableTest($ID)
    {
        //dd($branchID);
        $delete = AvailableTest::find($ID);
        $delete->delete();
        return redirect()->back()->with('message','successful');
    }

    public function updateAvailableTest(Request $request)
    {

        $request->validate([
            'AvailableTestName' =>['required','string'],
            'AvailableTestRange' =>['required','string']
        ]);

        AvailableTest::where('id', $request->id)
        ->update([
                    'AvailableTestName' => $request->AvailableTestName,
                    'AvailableTestRange'=> $request->AvailableTestRange
                    
                ]);

        return redirect()->back()->with('message','successful');

    }


    //Staff

    public function addStaff()
    {   
        return view('Users.Admin.Staff.addStaff');
    }

    public function allStaff()
    {
        //$clients=User::where('role',0)->get();

       // $branches=Plan::all('planName', 'planID', 'planPrice');
        $clients = User::where('users.role','!=',0)->get();
        //->join('table1','table1.id','=','table3.id');
        //dd($clients);
        return view('Users.Admin.Staff.allStaff',compact('clients'));
    }
    
    public function deleteStaff($userID)
    {
        //dd($branchID);
        $delete = User::find($userID);
        $delete->delete();
        return redirect()->back()->with('message','successful');
    }

    public function updateStaff(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:M,F,O'],
            'dob' => ['required', 'string', 'date','before:-13 years'],
            'email' => ['string', 'email', 'max:255'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['string'],
            'mobile' =>['string'],
            'zipCode'=>['integer'],
            'joinDate'=> ['required', 'string', 'date'],
            'role' => ['required', 'integer']
        ]);


        User::where('id', $request->id)
        ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    //'password' => \Hash::make($request->password),
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'zipCode'=> $request->zipCode,
                    'joinDate'=> $request->joinDate,
                    'dob'=> $request->dob,
                    'gender' => $request->gender,
                    'refPlan' => $request->refPlan,
                    'role' => $request->role,
                    'wdays'  => $request->sun.''.$request->mon.''.$request->tue.''.$request->wed.''.$request->thu.''.$request->fri.''.$request->sat.''.$request->hiddenDay
                ]);

        return redirect()->back()->with('message','successful');

    }
}
