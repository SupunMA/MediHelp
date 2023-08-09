<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Patient;
use App\Models\AvailableTest;



class admin_TestsCtr extends Controller
{
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


    //Test

    public function addTest()
    {
        $patients = Patient::with('user')->get();
        $availableTests = AvailableTest::all();
        return view('Users.Admin.Tests.AddNewTest',compact('patients','availableTests'));
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


}
