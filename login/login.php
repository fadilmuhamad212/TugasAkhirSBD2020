<!DOCTYPE html>
<html lang="en">
<head>

	<title>JADWAL KERETA API</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/ee.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="coverBg"></div>
		<div class="container-login100" style="background-image: url('images/bb.jpg');">
			<div class="wrap-login100 p-t-45 p-b-20">
				<form class="login100-form validate-form" action="../pages/ceklogin.php" method="POST">
					<span class="login100-form-title p-b-30">
						Welcome to <br> Sistem Informasi Jadwal Kereta Api
					</span>
					<span class="login100-form-avatar">
						<img src="images/dd.jpg" alt="ICON">
					</span>

					<div class="wrap-input100 validate-input m-t-60 m-b-30" data-validate = "Enter username" >
                        <span class="txt2">Username</span>
						<input class="input100" type="text" name="username"autofocus>
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-30" data-validate="Enter password">
                        <span class="txt2">Password</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="login_admin" value="Login">
					</div>

					<!-- <ul class="login-more p-t-33">
						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="#" class="txt2">
								Sign up
							</a>
						</li>
					</ul> -->
				</form>
			</div>
		</div>
	</div>

</body>
</html>