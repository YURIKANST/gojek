<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
	<title>Gojek Apps</title>
	<link rel="stylesheet" href="ladun/css/auth.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
	<script type="text/javascript" src="login.js"></script>
</head>

<body>
	<div class="lowin lowin-red">
		<div class="lowin-brand">
			<img src="asset/img/logo.png" alt="logo">
		</div>
		<div class="lowin-wrapper">
			<div class="lowin-box lowin-login">
				<div class="lowin-box-inner">
					<form>
						<p>Gojek Ilkomp<br/>
						Sign in to continue</p>
						<div class="lowin-group">
							<label>Email <a href="#!" class="login-back-link">Sign in?</a></label>
							<input type="email" id="txtEmail" autocomplete="email" name="email" class="lowin-input">
						</div>
						<div class="lowin-group password-group">
							<label>Password <a href="#!" class="forgot-link">Forgot Password?</a></label>
							<input type="password" id="txtPassword" name="password" autocomplete="current-password" class="lowin-input">
						</div>
						<div class="lowin-group" id="divStatusLogin" style="text-align: center;color:red;display: none;">
							<i class="fa fa-spin fa-refresh"></i> Log In ...
						</div>
						
					</form>
					<button class="lowin-btn" id="btnMasuk">
							<i class="fa fa-sign-in"></i> Sign In
						</button>

						<div class="text-foot">
							Don't have an account? <a href="register.html" class="">Register</a>
						</div>
				</div>
			</div>

			<div class="lowin-box lowin-register">
				<div class="lowin-box-inner">
					<form>
						<p>Let's create your account</p>
						<div class="lowin-group">
							<label>Name</label>
							<input type="text" name="name" autocomplete="name" class="lowin-input">
						</div>
						<div class="lowin-group">
							<label>Email</label>
							<input type="email" autocomplete="email" name="email" class="lowin-input">
						</div>
						<div class="lowin-group">
							<label>Password</label>
							<input type="password" name="password" autocomplete="current-password" class="lowin-input">
						</div>
						<button class="lowin-btn">
							Sign Up
						</button>

						<div class="text-foot">
							Already have an account? <a href="" class="login-link">Login</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	
		<footer class="lowin-footer">
			Gojek Ilkomp</a>
		</footer>
	</div>

	
	<script src="ladun/js/auth.js"></script>
	<script>
		Auth.init({
			login_url: '#login',
			forgot_url: '#forgot'
		});
	</script>
</body>
</html>