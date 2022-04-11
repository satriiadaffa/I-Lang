<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function ViewBeranda(){
        return view ('beranda');
    }

    public function ViewUpload(){
        return view ('upload');
    }

    public function ViewHalamanEvent(){
        return view ('halamanEvent');
    }

    public function ViewLogin(){
        return view ('login');
    }

    public function ViewRegistrasi(){
        return view ('registrasi');
    }
}
