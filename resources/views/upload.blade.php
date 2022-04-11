<link rel="stylesheet" href="{{asset ('css/styleUpload.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@extends('layout.index')

@section('content')
    <div class="container ctn-up">
      <form action="/">
        <div class="banner">
          <h1>Unggah Event</h1>
        </div>
        <div class="item">
          <p>Masukkan Gambar</p>
          <input type="file" name="phone" placeholder=""/>
        </div>
        <div class="item">
          <p>Judul Event</p>
          <input type="text" name="phone" placeholder=""/>
        </div>
        <div class="item">
          <p>Penyelenggara</p>
          <input type="text" name="phone" placeholder=""/>
        </div>
        <div class="item">
          <p>Tanggal Event</p>
          <input type="date" name="bdate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <p>Waktu Event</p>
          <input type="time" name="btime" required/>
        </div>
        <div class="item">
          <p>Deskripsi</p>
          <textarea rows="3"></textarea>
        </div>
          <div class="item">
            <p>Nomor Hp Penyelenggara</p>
            <input type="text" name="phone" placeholder=""/>
          </div>
          <div class="item">
            <p>E-Mail Penyelenggara</p>
            <input type="e-mail" name="phone" placeholder=""/>
          </div>
          
          
        
         <div class="item">
          <button class="primary-btn" type="submit" href="/">Unggah Eventmu</button>
        </div>
      </form>
    </div>

@endsection
