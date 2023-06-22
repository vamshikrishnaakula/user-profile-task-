<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\candidate;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{

    public function indexx()  
    {   
        $data=User::paginate(1);
        // return DB::select("select * from candidate");
        return view('about',['members'=>$data]);
      
    }

    public function login(){
        return view('login');
    }

    public function authenticate(Request $request){
          if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]) ){
            return redirect ('about');
          }              
          return back()->withErrors(['failed'=>'incorrect mail/password']);
    
        }

    public function profile(){
        return view('profile');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect ('/');
    }


    public function reg(){
           

        //return "Hiii";
        return view('registration');
    }

    //password methods
    public function changePassword(Request $request)
    {
        return view('change-password');
    }
 
    public function changePasswordSave(Request $request)
    {
        
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:5|string'
        ]);
        $auth = Auth::user();
 
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
 
        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }
}
