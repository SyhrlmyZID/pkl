<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Title -->
    <title>Klipaa | Login</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Logo -->
    <link rel="shortcut icon" href="svg/L-Klipaa.svg" type="image/x-icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/login.css" rel="stylesheet">

    <style>
        .login-wrap {
            box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.20);
-webkit-box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.20);
-moz-box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.20);
        transition: 0.5s;
        }

        .login-wrap:hover {
            box-shadow: 0px 0px 15px 3px rgba(0,0,0,0.50);
-webkit-box-shadow: 0px 0px 15px 3px rgba(0,0,0,0.50);
-moz-box-shadow: 0px 0px 15px 3px rgba(0,0,0,0.50);
        }
    </style>

</head>

<body>
    


    <!-- Login -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<div class="d-flex align-items-center justify-content-center">
							<img src="svg/L-Klipaa.svg" width="64" height="64">
						</div>
						<h3 class="text-center mb-4">Masuk Akun Klipaa</h3>
						<form action="#" class="login-form">
							<div class="form-group">
								<input type="text" class="form-control rounded-left" placeholder="Username" required>
							</div>
							<div class="form-group d-flex">
								<input type="password" class="form-control rounded-left" placeholder="Password"
									required>
							</div>
							<div class="form-group">
								<button type="submit"
									class="form-control btn btn-primary rounded submit px-3">Login</button>
							</div>
							<div class="form-group d-md-flex" style="display: flex; justify-content: center;">
								<div class="text-md-center">
									<a href="#" style="text-align: center;">Lupa Password</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- End | Login -->

	<!-- Java Script | Connect -->
	<script src="js/main.js"></script>
</body>

</html>