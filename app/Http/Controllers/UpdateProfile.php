<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UserRequest;



class UpdateProfile extends Controller
{
    // Staff
    public function StaffViewUpdateProfile(Request $request)
    {
        $client = Auth::user();
        return view('Users.Admin.Profile.myProfile',compact('client'));
    }
 
    public function StaffUpdateProfile(Request $request)
    {
        
        $this->validate($request, [

            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:M,F,O'],
            'dob' => ['required', 'string', 'date','before:-13 years'],
            'email' => ['string', 'email', 'max:255'],
            'address' => ['string'],
            'mobile' =>['string'],
            'zipCode'=>['integer'],
            'joinDate'=> ['required', 'string', 'date'],
            'role' => ['required', 'integer'],

            'current_password' => 'required|string',
            
            
        ]);
        $auth = Auth::user();
        $user =  User::find($auth->id);

        $newPWD = $request->new_password;
        if ($newPWD !=''){
            $this->validate($request, [
                'new_password' => 'confirmed|min:8|string'
                
            ]);
            
        $user->password = Hash::make($request->new_password);
            
        }
        
 
        // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
 
        // Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
 
        

        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->zipCode = $request->zipCode;
        $user->joinDate = $request->joinDate;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->role = $request->role;
        
        $user->save();
        return back()->with('message','successful');
    }

    //Customer

    public function CustomerViewUpdateProfile(Request $request)
    {
        $client = Auth::user();
        $Plans = Plan::all();
        return view('Users.User.Profile.myProfile',compact('client','Plans'));
    }

    public function CustomerUpdateProfile(Request $request)
    {
        
        $this->validate($request, [

            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:M,F,O'],
            'dob' => ['required', 'string', 'date','before:-13 years'],
            'email' => ['string', 'email', 'max:255'],
            'address' => ['string'],
            'mobile' =>['string'],
            'zipCode'=>['integer'],
            'joinDate'=> ['required', 'string', 'date'],
            'plan' => ['required', 'integer'],

            'current_password' => 'required|string',
            
            
        ]);
        $auth = Auth::user();
        $user =  User::find($auth->id);

        $newPWD = $request->new_password;
        if ($newPWD !=''){
            $this->validate($request, [
                'new_password' => 'confirmed|min:8|string'
                
            ]);
            
        $user->password = Hash::make($request->new_password);
            
        }
        
 
        // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('error', "Current Password is Invalid");
        }
 
        // Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
 
        

        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->zipCode = $request->zipCode;
        $user->joinDate = $request->joinDate;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->refPlan = $request->plan;
        
        $user->save();
        return back()->with('message','successful');
    }
}
