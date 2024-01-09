<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\AvailableTest;
use App\Models\subcategory;
use DB;


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

    public function addingAvailableTest(Request $request)
    {
         $request->validate([
            'AvailableTestName' =>['required','string'],
            'resultDays' =>['required','integer'],
            'AvailableTestCost' =>['required','integer'],
            'SubCategoryName.*' => ['required', 'string'],
            'SubCategoryRange.*' => ['required', 'string'],
            'Units.*' => ['required', 'string']

         ]);


         $AvailableTest = new AvailableTest();

         $AvailableTest->AvailableTestName = $request->AvailableTestName;
         $AvailableTest->resultDays = $request->resultDays;
         $AvailableTest->AvailableTestCost = $request->AvailableTestCost;


        //Getting next available test ID
        $tableName = 'available_tests';
        $nextId = DB::select("SHOW TABLE STATUS LIKE '$tableName'")[0]->Auto_increment;

        $dataInputsName = $request->input('SubCategoryName');
        $dataInputsRange = $request->input('SubCategoryRange');
        $dataInputsUnits = $request->input('Units');


        if($dataInputsName!=null){
            $AvailableTest->save();
            $count = count($dataInputsName);

            if ($nextId) {

                for ($i = 0; $i < $count; $i++) {
                    $subcategory = new subcategory();
                    $subcategory->SubCategoryName=$dataInputsName[$i];
                    $subcategory->SubCategoryRange=$dataInputsRange[$i];
                    $subcategory->Units=$dataInputsUnits[$i];
                    $subcategory->AvailableTestID=$nextId;

                    $subcategory->save();
                }


            } else {
                return "No users found.";
            }
        return redirect()->back()->with('message','Added Available Test Successfully');

        }



        return redirect()->back()->with('message','Error! Could not save the data! Please Add Sub Category');
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
        return redirect()->back()->with('message','Deleted Successful');
    }

    public function updateAvailableTest(Request $request)
    {

        $request->validate([
            'AvailableTestName' =>['required','string'],
            'AvailableTestRange' =>['required','string'],
            'AvailableTestCost' =>['required','integer']
        ]);

        AvailableTest::where('tlid', $request->id)
        ->update([
                    'AvailableTestName' => $request->AvailableTestName,
                    'AvailableTestRange'=> $request->AvailableTestRange,
                    'AvailableTestCost'=> $request->AvailableTestCost

                ]);

        return redirect()->back()->with('message','Updated Successfully');

    }


}
