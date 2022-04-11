<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrasi</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/styleregis.css"/>
</head>
<body class="form-v7">
	<div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
				<img src="img/tugu.png" alt="form">
				<p class="text-1">Mendaftar</p>
				<p class="text-2">
					Kebijakan privasi & Ketentuan layanan</p>
			</div>
			<form class="form-detail" action="/mahasiswa" method="post" id="myform">
				<div class="form-row">
					<label for="username">Nama Pengguna</label>
					<input type="text" name="username" id="username" class="input-text">
				</div>
				<div class="form-row">
					<label for="your_email">E-Mail</label>
					<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<label for="password">Kata Sandi</label>
					<input type="password" name="password" id="password" class="input-text" required>
				</div>
				<div class="form-row">
					<label for="comfirm_password">Konfirmasi Kata Sandi</label>
					<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Daftar!">
					<p>Punya Akun?<a href="/login">Masuk</a></p>
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
				username: {
			      	required: true
			    },
			    your_email: {
			      	required: true,
			      	email: true
			    },
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		username: {
		  			required: "Masukkan Nama Pengguna"
		  		},
		  		your_email: {
		  			required: "Masukkan E-mail Yang Valid"
		  		},
		  		password: {
	  				required: "Masukkan Kata Sandi"
		  		},
		  		comfirm_password: {
		  			required: "Masukkan Kata Sandi Yang Sama",
		      		equalTo: "Kata Sandi Salah!"
		    	}
		  	}
		});
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
