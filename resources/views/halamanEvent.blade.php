<title>@yield('title', 'i-Lang')</title>
<link rel="shortcut icon" href="{{url('img/favicon.png')}}">
@extends('layout.index')
<link rel="stylesheet" href="{{asset ('css/styleEvent.css')}}"/>
<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')
<div class="">
  <div class="container row-event">
    <div class="col-4" id="card-img">
    <div class="card" >
        <div class="card-body text-center" >
          <h5 class="card-title">{{$event->event_title}}</h5>
          <img src="{{asset ('storage/fotoEvent/'.$event->image)}}" class="img-thumbnail img-fluid img-responsive"> 
        </div>
      </div>
    </div>
  
    <div class="col-12">
    <div class="card">
        <div class="card-body text-left">
          <h5 class="card-title">Informasi Kegiatan</h5>
          <hr>
          <div class="card-body-content">
            
            <h6>Tanggal : {{$event->event_date}}</h6>
            <h6>Pukul : {{$event->event_time}}</h6>
            <h6>Tempat : {{$event->place}}</h6>
            <h6>Narahubung : {{$event->phone}}</h6>
            <h6>Penyelenggara : {{$event->organizer}}</h6>
            <hr>
            <p>
              {{$event->desc}}
            </p>
          </div>
          <div class="event-btn">
            @if ($event->ticket_link==!null) 
            <a href="{{$event->ticket_link}}"><button class="primary-btn">Beli Tiket</button></a>
          
          @endif

          @if ($event->wa_able==!null) 
            <a href="{{url('https://wa.me/'.$event->phone)}}"><button class="primary-btn">Hubungi Penyelenggara via Whatsapp</button></a>
          
          @endif
          

          
          
        </div>
      </div>
    </div>
  </div>
</div>
 
@endsection