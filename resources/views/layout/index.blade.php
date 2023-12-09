<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>@yield('title', 'i-Lang')</title>

		<link rel="shortcut icon" href="{{url('img/favicon.png')}}">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset ('css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset ('css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset ('css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset ('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset ('css/style.css')}}"/>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					@auth
						<ul class="header-links pull-right" style="margin-left:10px">
							<li>
								<form action="{{ url('/logout')}}" method="post">
									@csrf
									<button type="submit" style="padding-top:0px;background-color:transparent;border:0px;color:white" onMouseOver="this.style.color='b457bd'"
									onMouseOut="this.style.color='white'" ><i id="i" class="fa fa-user-o"></i> Keluar </button>
								</form>
								
							</li>
						</ul>
						<ul class="header-links pull-right ml-2">
							<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
						</ul>
						<ul class="header-links pull-right">
							<li><a href="/akun/{{ auth()->user()->id }}"><i  id="i" class="fa fa-user-o"></i> Selamat Datang, {{ auth()->users()->userName }} </a></li>
						</ul>
					@else
						<ul class="header-links pull-right ml-2">
							<li><a href="/login"><i class="fa fa-user-o"></i>Masuk</a></li>
						</ul>
						<ul class="header-links pull-right ml-2">
							<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
						</ul>
						<ul class="header-links pull-right" style="margin-left:10px">
							<li><a href="/registrasi"><i class="fa fa-user-o"></i> Registrasi</a></li>
						</ul>
					@endauth
					
                    
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="{{url('/index')}}"><img src="{{url('img/logo.png')}}" style="padding-top: 18px;width:55%" alt="i-Lang"></a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search mx-auto d-block">
							<form action="{{url('/search')}}" method="GET">
								
								<input class="input" type="text" name="search" placeholder="Cari Event Apa?" value="{{request('search')}}">
						
								
								<input type="submit" class="search-btn" value="Cari">
							</form>
							</div>
							
						</div>
						<!-- /SEARCH BAR -->
						
						

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							@auth
							<form action="{{url('upload')}}" method="GET">
								<button class="primary-btn" style="margin-top:15px;margin-left:40px" type="submit">Tambahkan Event</button>
							</form>
							@else
							<form action="{{url('login')}}" method="GET">
								<button class="primary-btn" style="margin-top:15px;margin-left:40px" type="submit">Tambahkan Event</button>
							</form>
							@endauth
							<div class="header-ctn">
								<!-- Wishlist -->

								
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->

					<nav class="nav">
						<a class="nav-link" id="navbar" href="/index">Beranda</a></a>
						@auth
						<a class="nav-link" id="navbar" href="/akun/{{ auth()->user()->id }}">Akun Saya</a>
						<a class="nav-link" id="navbar" href="/event-saya/{{ auth()->user()->email }}">Event Saya</a>
						@endauth
					  </nav>
					
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

        @section('content')
        
        @show

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Tentang Kami</h3>
								<p class="ttg-kami">Website ini adalah sebuah website yang dibuat dengan framework laravel yang memiliki tujuan untuk menyebarkan Informasi
									event - event yang ada di kota Malang, sehingga dapat membantu masyarakat dalam mencari informasi maupun acara yang mereka kehendaki, dan juga website ini dibuat untuk memenuhi tugas besar mata kuliah Pemrograman Web yang dibina oleh bapak Achmad Hamdan, S.Pd, M.Pd.
								</p>
								<ul class="footer-links">
									
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Lainnya</h3>
								<ul class="footer-links">
									<li><a href="https://um.ac.id"><i class="fa fa-map-marker"></i>Universitas Negeri Malang</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+62123432543</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
									
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informasi</h3>
								<ul class="footer-links">
									<li><a href="/TentangKami">Tentang Kami</a></li>
									<li><a href="/HubungiKami">Hubungi Kami</a></li>
									<li><a href="/Kebijakan">Kebijakan Privasi</a></li>
									<li><a href="/Syarat">Syarat & Ketentuan</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Layanan</h3>
								<ul class="footer-links">
									@auth
									<li><a href="/akun/{{ auth()->user()->id }}">Akun Saya</a></li>
									@endauth
									<li><a href="/Bantuan">Bantuan</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							{{-- <ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul> --}}
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Web ini dibuat dengan <i class="fa fa-heart-o" aria-hidden="true"></i> oleh Kelompok 5
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
