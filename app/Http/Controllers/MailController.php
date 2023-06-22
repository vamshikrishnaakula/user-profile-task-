<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;
use App\Models\User;

class MailController extends Controller
{
    public function basic_email() {

      $user=User::find(12);
  
        $data = [
                   'username' => $user->name,

                   'email' => $user->email,
        ];
        Mail::to('vamshipatel99@gmail.com')->send(new MailNotify($data));
  
      //   if (Mail::failures()) {
      //        return response()->Fail('Sorry! Please try again latter');
      //   }else{
      //        return response()->success('Great! Successfully send in your mail');
      //      }
     return view('mail',['data'=>$data]);
  
   }
}
