<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function buatSession(){
        session(['hakAkses' => 'admin']);
        // return view ('/index');
        return "Session di buat";
    }

    public function hapusSession(){

        session()->flush();
        echo "Session hakAkses sudah dihapus";

    }
}
