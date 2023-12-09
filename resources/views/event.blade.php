<title>@yield('title', 'i-Lang - Event Saya')</title>
<link rel="shortcut icon" href="{{url('img/favicon.png')}}">
@extends('layout.index')
<!-- Bootstrap Font Icon CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{asset ('css/styleBeranda.css')}}"/>

@section('content')


    
  <br>
  <div class="container">
    <h3>Event Saya</h3>
    <br>
    @if(session()->has('pesan'))
      <div class="alert alert-success">
        {{session()->get('pesan')}}
      </div>
    @endif

    
    @foreach ($events as $event)
    
      <hr>
        <div class="row evn-title">{{$event->event_title}}</div>
        <hr>
        <div class="container evn-display">
        <div><img class="img-fluid" src="{{asset('storage/fotoEvent/'.$event->image)}}" style="width: 80px;height:160px;margin-right:20px"></div>
        <br>
        <div class="list-item col-9">
          <li class="list-group-item">Kategori : {{$event->category}}</li>
          <hr>
          <li class="list-group-item">Tanggal : {{$event->event_date}}</li>
          <li class="list-group-item">Tempat : {{$event->place}}</li>
          <li class="list-group-item">Penyelenggara : {{$event->organizer}}</li></div>
          <br>
        <div class="act-list">
          <a style="margin-right:10px"href="{{url('events/'.$event->id.'/edit')}}"><button type="button" class="edit-btn "><i class="ri-edit-box-line">Edit</i></button></a>
        <form action="{{url('/events/'.$event->id)}}" method="post">
          @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Event {{$event->event_title}}?')" class="delete-btn" type="submit" >Delete</button>
      
        </form>
        
      </div>
        </div>
    
@endforeach 



<br>
<br>

</div>


@endsection

<link type="text/css" rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')

