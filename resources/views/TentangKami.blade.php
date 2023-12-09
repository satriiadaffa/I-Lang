<title>@yield('title', 'i-Lang - Tentang Kami')</title>
<link rel="shortcut icon" href="{{url('img/favicon.png')}}">
@extends('layout.index')
<link rel="stylesheet" href="{{asset ('css/styleberanda.css')}}"/>
<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')

<br>
<div class="container mt-3">
    <h2 class="text-center">Selamat Datang di <a style="font-size:30px" href="http://127.0.0.1:8000/index">I-Lang</a></h2>
<br>
    <h4 class="text-center">i-Lang merupakan sebuah website untuk menyebarkan seluruh Informasi event - event yang ada di kota Malang. Website ini juga dikembangkan dalam rangkan memenuhi tugas akhir mata kuliah Pemrograman Web.</h4>
<br>
    <h4 class="text-center">Dikembangkan dengan menggunakan Framework Laravel dan Bootstrap, i-Lang memiliki beragam fitur untuk mewujudkan penyebaran informasi event di Malang dengan lebih baik.</h4>
<br>    
    <h4 class="text-center">Pihak yang berperan dalam pengembangan web ini adalah kelompok 5 prodi S1 Teknik Informatika UM Offering B Angkatan 2021</h4>

</div>
<br>
<br>

<div class="container mt-3">
    <h2 class="text-center">Tim Kami</h2>

    <div class="card box col-md-2" style="height:470px;width:220px" id="card">
        <img class="card-img-top mx-auto d-block img-fluid" src="{{url('img/daffa.png')}}" alt="Satria Daffa" style="width:275px;height:300px">
        <div class="card-body">
            <h4 class="text-center">Satria Daffa Athallah Pratama</h4>
          <hr>
          <h5 class="text-center">Program Developer</h5>
        </div>
      </div>  
    

    <div class="card box col-md-2" style="height:470px;width:220px" id="card">
        <img class="card-img-top mx-auto d-block img-fluid" src="{{url('img/rayhan.png')}}" alt="Muhammad Rayhan" style="width:275px;height:300px">
        <div class="card-body">
            <h4 class="text-center">Muhammad Rayhan Ardhinar</h4>
          <hr>
          <h5 class="text-center">UI & UX Developer</h5>
        </div>
      </div>  

      <div class="card box col-md-2" style="height:470px;width:220px" id="card">
        <img class="card-img-top mx-auto d-block img-fluid" src="{{url('img/zidan.png')}}" alt="Muhammad Zidan" style="width:275px;height:300px">
        <div class="card-body">
            <h4 class="text-center">Muhammad Zidan Brilliant</h4>
          <hr>
          <h5 class="text-center">Marketing & Administration</h5>
        </div>
      </div>  

      <div class="card box col-md-2" style="height:470px;width:220px" id="card">
        <img class="card-img-top mx-auto d-block img-fluid" src="{{url('img/wahyu.png')}}" alt="Wahyu Pratama" style="width:275px;height:300px">
        <div class="card-body" style="margin-top:20px">
            <h4 class="text-center">Wahyu Pratama</h4>
          <hr>
          <h5 class="text-center">Content Researchers & Public Relations</h5>
        </div>
      </div>  


      
    </div>  
<br>
<br>

@endsection