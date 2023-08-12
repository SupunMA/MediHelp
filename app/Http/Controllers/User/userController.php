<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;




class userController extends Controller
{
    public function checkUser()
    {

        $userId = Auth::id();

        //Reports count
        $reportCount = User::join('patients', 'patients.userID', '=', 'users.id')
        ->join('tests', 'tests.pid', '=', 'patients.pid')
        ->join('available_tests', 'available_tests.tlid', '=', 'tests.tlid')
        ->join('reports', 'reports.tid', '=', 'tests.tid')
        ->select('users.*', 'tests.*', 'available_tests.*','reports.*')
        ->where('tests.done','=', 1)
         ->where('users.id','=', $userId)
        ->count();

        //pending count
        $pendingCount = User::join('patients', 'patients.userID', '=', 'users.id')
        ->join('tests', 'tests.pid', '=', 'patients.pid')
        ->join('available_tests', 'available_tests.tlid', '=', 'tests.tlid')
        ->join('reports', 'reports.tid', '=', 'tests.tid')
        ->select('users.*', 'tests.*', 'available_tests.*','reports.*')
        ->where('tests.done','=', 0)
         ->where('users.id','=', $userId)
        ->count();
        
       //all done test with other tables
       $allReportData = User::join('patients', 'patients.userID', '=', 'users.id')
       ->join('tests', 'tests.pid', '=', 'patients.pid')
       ->join('available_tests', 'available_tests.tlid', '=', 'tests.tlid')
       ->join('reports', 'reports.tid', '=', 'tests.tid')
       ->select('users.*', 'tests.*', 'available_tests.*','reports.*')
       ->where('tests.done','=', 1)
        ->where('users.id','=', $userId)
       ->get();

       return view('Users.User.home',compact('allReportData','pendingCount','reportCount'));
    }


    public function deleteUser($ID)
    {
        //dd($ID);
        $delete = User::find($ID);
        $delete->delete();
        return redirect()->back()->with('message','successful');
    }

    //view customer plans
    public function allPlanView(Request $request)
    {
        $plans = Plan::all();
        return view('Users.User.Plans.plan',compact('plans'));
    }

    
    //Select plan
    public function CustomerSelectPlan(Request $request)
    {
        
        
        $request->validate([
            'planID' => ['required']
        ]);

        User::where('id', $userId )
        ->update([
                    'refPlan' => $request->planID
                ]);

        return redirect()->back()->with('message','successful');

    }


    //makePayments
    public function makePaymentsView(Request $request)
    {
        
        $plans = Plan::all();
        
        return view('Users.User.Payment.pay',compact('plans'));
    }


    public function makePayments(Request $request)
    {
        $request->validate([
            'clientID' => ['required','integer'],
            'planID' => ['required','integer'],
            'payDate' => ['required', 'string', 'date'],
            
        ]);

        $payment = new Payment();
        $payment->clientID = $request->clientID;
        $payment->planID = $request->planID;
        $payment->payDate = $request->payDate;
       
        if( $payment->save() ){
            return redirect()->back()->with('message','successful');
        }else{
            return redirect()->back()->with('message','Failed');
        }
    }


    public function bookingTime(Request $request)
    {
        //dd($request);
        $request->validate([
            'slotID' => ['required','integer'],
            'coachID' => ['required','integer'],
            'date' => ['required', 'string', 'date'],
            
        ]);

        $timeT = new Timetable();
        $timeT->clientID = auth::id();
        $timeT->coachID = $request->coachID;
        $timeT->date = $request->date;
        $timeT->slotID = $request->slotID;
       
        if( $timeT->save() ){
            return redirect()->back()->with('message','successful');
        }else{
            return redirect()->back()->with('message','Failed');
        }
    }



    public function coachReview(Request $request){
        //dd("fdgfdg");
         $payment=$request->timeID;
        // dd($payment,$request->timeID);
        // $request->validate([
        //     'planID' => ['required']
        // ]);

        Timetable::where('id', $request->timeID )
        ->update([
                    'review' => $request->$payment
                ]);

        return redirect()->back()->with('message','successful');

    }

    public function deletePayment(Request $request)
    {
        $delete = Timetable::find($request->payID);
        $delete->delete();
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
        return view('Users.user.invoice-print',compact('viewReportData'));
    }
}