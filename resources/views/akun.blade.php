<title>@yield('title', 'i-Lang - Akun Saya')</title>
<link rel="shortcut icon" href="{{url('img/favicon.png')}}">
@extends('layout.index')
<link rel="stylesheet" href="{{asset ('css/styleberanda.css')}}"/>

@section('content')

<div class="container">
  <br>
    @if(session()->has('pesan'))
    
      <div class="alert alert-success">
        {{session()->get('pesan')}}
      </div>
    @endif
    
   <div class="head">
    <h3>Akun Saya</h3>
    <br>
   </div>
    
    <div class="list-group">
      <h5>Username</h5>
    <p>{{$users->username}}</p>
    <hr>
    <h5>E-mail</h5>
    <p>{{$users->email}}</p>
    <hr>
    <h5>Jenis Kelamin</h5>
    <p>{{$users->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</p>
    <hr>
    <h5>Nomor HP</h5>
    <p>{{$users->nomor_hp}}</p>
    
    </div>
    <div class="act-list-akun">
      <a href="{{url('akun/'.auth()->user()->id.'/edit')}}"><button class="edit-btn-akun" >Edit</button></a>
    <form action="{{url('/akun/'.$users->id)}}" method="post">
      @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Akun {{$users->username}}? \nSemua Event Yang Diunggah Akan Terhapus!')" class="delete-btn-akun" type="submit" >Delete</button>
  
    </div>
    </form>
    
    <br>
    <br>

</div>


@endsection

<link type="text/css" rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')

