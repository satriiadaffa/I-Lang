<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'i-Lang - Masuk')</title>
	<link rel="shortcut icon" href="{{url('img/favicon.png')}}">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/stylelogin.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="form-v7">
	<div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
				<img src="img/river.png" alt="form">
				<p class="text-1">Masuk</p>
				<p class="text-2">
					Kebijakan privasi & Ketentuan layanan</p>
			</div>
			<form class="form-detail" action="{{ url('/login')}}" method="POST" id="myform">
				@csrf
				@if (session()->has('loginError'))
				<div class="alert alert-danger" role="alert">
					{{session('loginError')}}
					<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close">

					</button>
				  </div>
					
				@endif
				<div class="form-row">
					<label for="username">E-Mail</label>
					<input type="text" name="email" id="email" class="form-control 
					@error('email') is-invalid @enderror">
					@error('email')
                        <div class="text-danger" id='error'>{{ $message }}</div>
                    @enderror
				</div>
				<div class="form-row">
					<label for="password">Kata Sandi</label>
					<input type="password" name="password" id="password" class="form-control 
					@error('password') is-invalid @enderror">
					@error('password')
                        <div class="text-danger" id='error'>{{ $message }}</div>
                    @enderror
				</div>
				<div class="form-row-last text-center">
					<input type="submit" name="register" class="register" value="Masuk">
					<p>Belum Punya Akun?<a href="/registrasi">Daftar Disini</a></p>

				</div>
			</form>
		</div>
	</div>
	
</body>
</html>
