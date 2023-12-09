<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class myEvents extends Controller
{
    public function index($events)
    {
        $events = event::all()->where('id','$users->id');

        return view('event',['u']);
    }
}