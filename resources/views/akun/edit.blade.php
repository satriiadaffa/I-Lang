<title>@yield('title', 'i-Lang - Edit Akun')</title>
@extends('layout.index')
<link rel="stylesheet" href="{{asset ('css/styleUpload.css')}}"/>

@section('content')

			@if(session()->has('pesan'))
      <div class="alert alert-success">
        {{session()->get('pesan')}}
      </div>
    @endif
	
<div class="container">
    <form class="form-detail" action="{{url('/akun/'.$res->id)}}" method="POST" id="myform">
        @csrf
        @method ('put')
        <div class="form-row">
            <label for="username">Nama Pengguna</label>
            <input type="text" value ="{{$res->username}}" name="username" id="username" class="form-control 
            @error('username') is-invalid @enderror" value="{{old('username')}}">
            @error('username')
                <div class="text-danger" id='error'>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <label for="email">E-Mail</label>
            <input type="text" value ="{{$res->email}}" name="email" id="email" class="form-control 
            @error('email') is-invalid @enderror" value="{{old('email')}}">
            @error('email')
                <div class="text-danger" id='error'>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-row">
            <label for="nomor_hp">Nomor HP</label>
            <input type="text" value ="{{$res->nomor_hp}}" name="nomor_hp" id="nomor_hp" class="form-control 
            @error('nomor_hp') is-invalid @enderror" value="{{old('nomor_hp')}}">
            @error('nomor_hp')
                <div class="text-danger" id='error'>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin"
                id="laki_laki" value="L"
                {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                <label class="form-check-label" for="laki_laki">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin"
                id="perempuan" value="P"
                {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                <label class="form-check-label" for="perempuan">Perempuan</label>
              </div>
              @error('jenis_kelamin')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
            <input type="submit" class="primary-btn"value="Simpan">

        </div>
    </form>
</div>
</div>
</div>


@endsection

<link type="text/css" rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')
