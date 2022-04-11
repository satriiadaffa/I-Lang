@extends('layout.index')

<link rel="stylesheet" href="{{asset ('css/styleberanda.css')}}"/>

<link type="text/css" rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')
<div class="container">
  <div class="card" style="width: 300px;">
    <a href="/halamanEvent" class="stretched-link">
    <img src="{{asset ('img/b.jpg')}}" style="width: 100%;" class="card-img-top">
    <div class="card-body">
      
      <h5 class="card-title text-center">Grand Opening Cafe de Flore</h5>
      <p class="card-text"></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Tanggal: 24 November 2022</li>
      <li class="list-group-item">Tempat: Cafe de Flore</li>
      <li class="list-group-item">Managerial Cafe de Flore</li>
    </ul>
  </a>
  </div>

</div>
 


@endsection
