<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        
        
        return view('beranda', [
            "events" => $events
        ]);   
    }

    public function search(){
        $search = $_GET['search'];
        $events = Event::where('event_title','LIKE', '%' . $search.'%')->get();

        
        return view('beranda-search', compact('events'));
    }

    
    public function myEvents()
    {
        
      return view('event',[
          'events' => Event::where('email',auth()->user()->email)->get()
        ]);

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validateData = $request->validate([
            'image' => 'required',
            'event_title' => 'required|min:2|max:50',
            'organizer' => 'required|min:3|max:50',
            'event_date' => 'required',
            'event_time' => 'required',
            'category' => 'required',
            'place' => 'required',
            'desc' => 'required',
            'phone' => 'required|min:8|max:15',
            'wa_able'=>'',
            'email' => 'required|email',
            'ticket_link' => ''

        ]);
        $data = Event::create($validateData);

        if($request->hasFile('image')){
            $request->file('image')->storeAs('fotoEvent/',$request->file('image')->getClientOriginalName() );
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        

        $events = event::all();
        

        return view('beranda',compact('events'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($event)
    {   
        $event = Event::find($event);
        return view('halamanEvent',['event' => $event]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);
        
        return view('event.edit',compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $events)
    {   
        
        
        $validateData = $request->validate([
            'id' => 'required',
            'event_title' => 'required|min:2|max:50',
            'organizer' => 'required|min:3|max:50',
            'event_date' => 'required',
            'event_time' => 'required',
            'category' => 'required',
            'place' => 'required',
            'desc' => 'required',
            'phone' => 'required|min:8|max:15',
            'wa_able'=>'',
            'email' => 'required|email',
            'ticket_link' => ''

        ]);


         $res=Event::where('id',$validateData['id'])->update([
            'event_title' => $validateData['event_title'],
            'organizer' => $validateData['organizer'],
            'event_date' => $validateData['event_date'],
            'event_time' => $validateData['event_time'],
            'category' => $validateData['category'],
            'place' => $validateData['place'],
            'desc' => $validateData['desc'],
            'phone' => $validateData['phone'],
            'wa_able' => $validateData['wa_able'],
            'email' => $validateData['email'],
            'ticket_link' => $validateData['ticket_link']
        ]);

        
        
        
        
        return redirect('event-saya/'.auth()->user()->email)->with('pesan','Event Berhasil Di Update');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = event::find($id);
        $res->delete();
        return redirect('event-saya/'.auth()->user()->email)->with('pesan','Event Berhasil Di Hapus');
    }

}