<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Patient;
use App\Models\AvailableTest;
use App\Models\Test;

use Carbon\Carbon;

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

    public function addingTest(Request $data)
    {
         $data->validate([
            'pid' =>['required','string'],
            'tlid' =>['required','string'],
            'date' => ['date'],
            'doctorName' => ['string']
         ]);

         //change the date format
        $formattedDate = Carbon::createFromFormat('m/d/Y', $data->date)->format('Y-m-d');

        $test = new Test();
        $test->pid = $data->pid;
        $test->tlid = $data->tlid;
        $test->date = $formattedDate; // Assign the formatted date
        $test->doctorName = $data->doctorName;

        // Save the Test instance to the database
        $test->save();
        return redirect()->back()->with('message','successful');
        //->route('your_url_where_you_want_to_redirect');
    }


    public function allTest()
    {
       
        // $testsData = User::with(['patient.tests' => function ($query) {
        //     $query->join('available_tests', 'tests.tlid', '=', 'available_tests.tlid')
        //            ->select('users.*', 'tests.*', 'available_tests.*')
        //           ->orderBy('tests.date', 'desc');
        // }])->get();


        // ->where('users.id', '=', $userId)

        $allTestData = User::join('patients', 'patients.userID', '=', 'users.id')
    ->join('tests', 'tests.pid', '=', 'patients.pid')
    ->join('available_tests', 'available_tests.tlid', '=', 'tests.tlid')
    ->select('users.*', 'tests.*', 'available_tests.*')
    ->get();

       //dd($test2Data);
        return view('Users.Admin.Tests.AllTests',compact('allTestData'));
    }
    
    public function deleteTest($ID)
    {
        //dd($branchID);
        $delete = Test::find($ID);
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
