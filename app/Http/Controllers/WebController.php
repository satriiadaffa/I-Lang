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

    public function TentangKami(){
        return view ('TentangKami');
    }

    public function Syarat(){
        return view ('Syarat');
    }

    public function HubungiKami(){
        return view ('HubungiKami');
    }

    public function Kebijakan(){
        return view ('Kebijakan');
    }

    public function Bantuan(){
        return view ('Bantuan');
    }

    public function ViewLogin(){
        return view ('login');
    }

    public function ViewRegistrasi(){
        return view ('registrasi');
    }

    public function show(){
        return view ('akun');
    }

    public function ViewEvent(){
        return view ('event');
    }
}
