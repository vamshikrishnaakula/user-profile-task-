<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Models\candidate;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class userwController extends Controller
{
    function getData(Request $req  )
    {
        // print_r($req->input());
        $user= new candidate;
        $user->id = $req->id;
        $user->name= $req->name;
        $user->fathername= $req->fathername;
        $user-> address= $req->address;
        $user-> save();
        return redirect ('about');

        // return "For === submission ";
    }
   

    function deletefunction($id)
    {
        // $data=candidate::find($id);
        $data=User::find($id);
        $data->delete();
        return redirect('about');
        
    }

    function editfunction($id)
    {
        // $data=candidate::find($id);
        $data=User::find($id);
        // return $data;
        return view('edit',['data2'=>$data]);
    }

    function update(Request $req  )
    {   
        // print_r($req->input());
        $cand=User::find($req->id);
        // $cand -> name=$req->nae;
        $cand -> email=$req->email;
        // return "hiii";
        return $cand;
    }
    function dbcalling()
    {
        
        $data = User::find(Auth::user()->id);
        return view('help',['data'=> $data]);
    
    }

    function show()
    {
        

      $data= DB::table('candidate data')->join('candidate','candidate.id',"=",'candidate data.id')->get();
      return view('vamshi',['data'=>$data]);

    }

    // function()
}   
