<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Intervention\Image\Facades\Image;

class RegistrationController extends Controller
{
    //
    public function reg(Request $req){
        $user = new User;
        $user -> name=$req->name;
        $mail= $req->email; 
        $user -> email= $mail;
        //$data = \Hash::make($value)
        $a=$req->password; 
        $data = \Hash::make($a);

        $user -> password=$data;                              
        // return $user;  
        
        $img = $req->profile_image;
        // $img = Image::make(public_path($img ));
        // $img->text('add data what you want.', 120, 100);
        $aa = base64_encode(file_get_contents($img));
        if($req->hasfile('profile_image')){
            $file= $req->file('profile_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            // $file-> move('uploads/students/', $filename);
            $file-> move(public_path('public/Image'), $filename);
            $user->profile_image = $aa;
        }      
        //chech_box
        //$check= $req->cat; 
        //return gettype($check);
        $user -> categories = json_encode($req->cat); 
        //$user -> categories = $check; 

        $user ->save();
    // mail
    $data = [
        'password' => $a,

        'email' => $mail,
    ];
       
       Mail::to($mail)->send(new MailNotify($data));
        return view('login');

        // print_r($req->input());

    }

    //edit 

    public function updatemethod(Request $req){
        $user = User::find($req->id);
        $user -> name=$req->name; 
        $user -> email=$req->email; 
        
        if($req->hasfile('profile_image')){
            $img = $req->profile_image;
            // $img = Image::make($img );
            // $img->text('The quick brown fox jumps over the lazy dog.', 120, 100);
            $aa = base64_encode(file_get_contents($img));
            $file= $req->file('profile_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            // $file-> move('uploads/students/', $filename);
            $file-> move(public_path('public/Image'), $filename);
            $user->profile_image = $aa;
        }        
        $user -> categories = json_encode($req->cat); 
        $user ->save();
        // print_r($req->input());
        return view('help',['data'=> $user]);

    }
     //new user
    // protected function create(array $data)
    // {
    //     $user=User::create([
    //         'name' =>$data['name'],
    //         'email' =>$data['email'],
    //         'password' =>Hash::make($data['password']),
    //     ]);
    //     Mail::to($data['email'])->send(new WelcomeMail($user));
    //     return $user;
    // }
    public function mailer()
    {   
        $data=['name'=>"Vamshi",'data'=>"Hello vamshi"];
        $user['to']='vamshipatel99@gmail.com';
        Mail::send('mail',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('Hello dev');
        });
    }
}
