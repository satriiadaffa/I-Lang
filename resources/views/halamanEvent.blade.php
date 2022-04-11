@extends('layout.index')
<link rel="stylesheet" href="{{asset ('css/styleEvent.css')}}"/>
<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')
<div class="container ctn-event">
  <div class=" row-event">
    <div class="col-sm-4">
    <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Grand Opening Cafe de Flore</h5>
          <img src="{{asset ('img/b.jpg')}}" class="img-thumbnail img-fluid img-responsive"> 
        </div>
      </div>
    </div>
  
    <div class="col-sm-4">
    <div class="card">
        <div class="card-body text-left">
          <h5 class="card-title">Info</h5>
          <p>
              Ini merupakan acara Grand Opening dari Cafe de Flore. Akan ada penampilan dari The Overtunes dan banyak promo. Hadiri dan meriahkanlah event ini!
          </p>
          <h6>Tanggal: 24 November 2022</h6>
          <h6>Tempat: Cafe de Flore</h6>
          <h6>Dress Code: merah</h6>
          <a href="#" class="primary-btn">Join</a> 
        </div>
      </div>
    </div>
  </div>
</div>
 
@endsection