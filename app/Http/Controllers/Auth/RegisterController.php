<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Patient;
use Carbon\Carbon;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest','admin');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'address' => ['string'],
            // 'mobile' =>['string'],
            // 'NIC'=>['integer','max:12']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    




    function addingStaff(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:M,F,O'],
            'dob' => ['required', 'string', 'date','before:-13 years'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['string'],
            'mobile' =>['string','unique:users'],
            'zipCode'=>['integer'],
            'joinDate'=> ['required', 'string', 'date'],
            'refPlan'=>['integer']
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->password = \Hash::make($request->password);

        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->zipCode = $request->zipCode;
        $user->dob = $request->dob;
        $user->joinDate = $request->joinDate;
        $user->gender = $request->gender;
        $user->refPlan = $request->refPlan;
        $user->role = $request->role;
        $user->wdays = $request->sun.''.$request->mon.''.$request->tue.''.$request->wed.''.$request->thu.''.$request->fri.''.$request->sat.''.$request->hiddenDay;

        if( $user->save() ){
            return redirect()->back()->with('message','successful');
        }else{
            return redirect()->back()->with('message','Failed');
        }

    }

    function addingClient(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:M,F,O'],
            'dob' => ['required', 'string', 'date','before:-13 years'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['string'],
            'mobile' =>['string','unique:users'],
            'zipCode'=>['integer'],
            'joinDate'=> ['required', 'string', 'date'],
            'refPlan'=>['integer']
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->password = \Hash::make($request->password);

        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->zipCode = $request->zipCode;
        $user->dob = $request->dob;
        $user->joinDate = $request->joinDate;
        $user->gender = $request->gender;
        $user->refPlan = $request->refPlan;
        $user->role = $request->role;

        if( $user->save() ){
            return redirect()->back()->with('message','successful');
        }else{
            return redirect()->back()->with('message','Failed');
        }

    }



    function addingPatient(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:M,F,O'],
            'dob' => ['required', 'string', 'date','before:-1 years'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' =>['string','unique:users'],
            'doctorName'=> ['required', 'string']
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->password = \Hash::make($request->password);
        $user->role = $request->role;

        $patient = new Patient();
        $patient->mobile = $request->mobile;
       //change the date format
        $formattedDate = Carbon::createFromFormat('m/d/Y', $request->dob)->format('Y-m-d');
        $patient->dob =  $formattedDate;
        $patient->doctorName = $request->doctorName;
        $patient->gender = $request->gender;


            $lastUser = User::latest()->first();

            if ($lastUser) {
                $lastUserId = $lastUser->id;
                $patient->userID = ($lastUserId + 1);
            } else {
                return "No users found.";
            }

        
        

        if( $user->save() &&  $patient->save()){
            return redirect()->back()->with('message','successful');
        }else{
            return redirect()->back()->with('message','Failed');
        }

    }




    function addingDoctor(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:M,F,O'],
            'dob' => ['required', 'string', 'date','before:-13 years'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => ['string'],
            'mobile' =>['string','unique:users'],
            'zipCode'=>['integer'],
            'joinDate'=> ['required', 'string', 'date'],
            'refPlan'=>['integer']
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->password = \Hash::make($request->password);

        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->zipCode = $request->zipCode;
        $user->dob = $request->dob;
        $user->joinDate = $request->joinDate;
        $user->gender = $request->gender;
        $user->refPlan = $request->refPlan;
        $user->role = $request->role;

        if( $user->save() ){
            return redirect()->back()->with('message','successful');
        }else{
            return redirect()->back()->with('message','Failed');
        }

    }
}