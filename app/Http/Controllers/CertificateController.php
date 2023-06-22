<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\certificate;

class CertificateController extends Controller
{
    public function index(){

        // $data=certificate::find(1);
        // return view('certificatedata',['data'=>$data]);
        return "Hii";
    }
}
