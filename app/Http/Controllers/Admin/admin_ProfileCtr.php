<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;


class admin_ProfileCtr extends Controller
{
    
   
 //Authenticate all Admin routes
    public function __construct()
    {
        $this->middleware('checkAdmin');
       // $this->task = new branches;
    }


    //Client


    public function updateAdmin(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            
            'email' => ['string', 'email', 'max:255'],
            'current_password' => 'required|string',
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            
    
            
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
        
        $user->save();
        return back()->with('message','successful');

    }

    public function deleteAdmin($userID)
    {
        //dd($branchID);
        $delete = User::find($userID);
        $delete->delete();
        return redirect()->back()->with('message','successful');
    }
}