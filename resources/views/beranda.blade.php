<title>@yield('title', 'i-Lang - Beranda')</title>
<link rel="shortcut icon" href="{{url('img/favicon.png')}}">

@extends('layout.index')

<link rel="stylesheet" href="{{asset ('css/styleberanda.css')}}"/>

<link type="text/css" rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')


<br>
<br>


<div class="row" id="body">


@foreach ($events as $event)


  <div class="card box col-md-3"  id="card">
    <a href="{{url('/show-events/'.$event->id)}}" class="stretched-link">
    <img class="card-img-top mx-auto d-block img-fluid" src="{{asset('storage/fotoEvent/'.$event->image)}}" style="width:392px;height:450px;" alt="event">
    <div class="card-body">
      <h5 class="card-title">{{$event->event_title}}</h5>
      <hr>
      <p> Kategori : {{$event->category}} </p>
      <hr>
    </div>
    
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Tanggal : {{$event->event_date}}</li>
      <li class="list-group-item">Tempat : {{$event->place}}</li>
      <li class="list-group-item">Penyelenggara : {{$event->organizer}}</li>
    </ul>
  </a>

  </div>

@endforeach
</div>



@endsection

