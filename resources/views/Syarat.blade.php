<link rel="shortcut icon" href="{{url('img/favicon.png')}}">
<title>@yield('title', 'i-Lang - Syarat Dan Ketentuan')</title>
@extends('layout.index')
<link rel="stylesheet" href="{{asset ('css/styleBeranda.css')}}"/>
<link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>
@section('content')

         <div class="container">
           <div class="text-center">
             <br>
             <h2>
               Syarat dan Ketentuan
             </h2>
             <br>
           </div>
          <div>
          <ol class="list-group list-group-numbered">
            <li class="list-group-item">
              Pengguna website bisa mencari info event di Malang dan bisa juga membagikan info event.
            </li>
            <li class="list-group-item">
              Pengguna bisa mengakses informasi tentang event tanpa harus melakukan login.
            </li>
            <li class="list-group-item">
              Pengguna harus melakukan login untuk ikut membagikan event.
            </li>
            <li class="list-group-item">
              Konten yang ditampilkan di i-Lang adalah konten non-SARA.
            </li>
            <li class="list-group-item">
              Pengguna lain bisa ikut melaporkan pelanggaran SARA yang ada.
            </li>
            <li class="list-group-item">
              Pihak i-Lang berhak melakukan banned bagi akun pelanggar ketentuan.
            </li>
          <ol>
          </div>
         </div>
         <br>
 
@endsection