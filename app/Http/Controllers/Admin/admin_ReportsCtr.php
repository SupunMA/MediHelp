<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Patient;
use App\Models\AvailableTest;
use App\Models\Test;
use App\Models\Report;

use Carbon\Carbon;

class admin_ReportsCtr extends Controller
{
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


    //Test

    public function addReport()
    {
        $allTestData = User::join('patients', 'patients.userID', '=', 'users.id')
        ->join('tests', 'tests.pid', '=', 'patients.pid')
        ->join('available_tests', 'available_tests.tlid', '=', 'tests.tlid')
        ->select('users.*', 'tests.*', 'available_tests.*')
        ->where('tests.done','=', 0)
        ->get();

        //dd($allTestData);
        return view('Users.Admin.Reports.AddNewReport',compact('allTestData'));
    }

    public function addingReport(Request $data)
    {
         $data->validate([
            'tid' =>['required'],
            'result' =>['required','string'],
            'status' => ['required','string']
         ]);

         $report = Report::create($data->all());

         Test::where('tid', $data->tid)
        ->update([
                    'done' => 1
                ]);
         return redirect()->back()->with('message','successful');
        
    }


    public function allReport()
    {
        //all done test with other tables
        $allReportData = User::join('patients', 'patients.userID', '=', 'users.id')
        ->join('tests', 'tests.pid', '=', 'patients.pid')
        ->join('available_tests', 'available_tests.tlid', '=', 'tests.tlid')
        ->join('reports', 'reports.tid', '=', 'tests.tid')
        ->select('users.*', 'tests.*', 'available_tests.*','reports.*')
        ->where('tests.done','=', 1)
        ->get();

        return view('Users.Admin.Reports.AllReport',compact('allReportData'));
    }
    
    public function deleteReport($ID)
    {
        //dd($branchID);
        $delete = Report::find($ID);
        $delete->delete();
        return redirect()->back()->with('message','successful');
    }

    public function updateReport(Request $request)
    {

        $request->validate([
            'result' =>['required','string'],
            'status' => ['required','string']
        ]);

        Report::where('rid', $request->rid)
        ->update([
                    'result' => $request->result,
                    'status'=> $request->status
                    
                ]);

        return redirect()->back()->with('message','successful');

    }

    public function viewReport($ID)
    {
        //all done test with other tables
        $viewReportData = User::join('patients', 'patients.userID', '=', 'users.id')
        ->join('tests', 'tests.pid', '=', 'patients.pid')
        ->join('available_tests', 'available_tests.tlid', '=', 'tests.tlid')
        ->join('reports', 'reports.tid', '=', 'tests.tid')
        ->select('users.*', 'tests.*', 'available_tests.*','reports.*','patients.*')
        ->where('reports.rid','=', $ID)
        ->first();

        //dd($viewReportData);
        return view('Users.Admin.Reports.components.invoice-print',compact('viewReportData'));
    }

    


}