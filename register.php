<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
	<title>Gojek Ilkomp</title>
	<link rel="stylesheet" href="ladun/css/auth.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</head>

<body>
	<div class="lowin lowin-red">
		<div class="lowin-brand">
			<img src="asset/img/logo.png" alt="logo">
		</div>
		<div class="lowin-wrapper">
			<div class="lowin-box lowin-login">
				<div class="lowin-box-inner">
					
						<p>Gojek Ilkomp<br/>
						Member Register Page</p>
						
            <div class="lowin-box-inner" id='divFormDaftar'>
					
						<p>Let's create your account</p>
						<div class="lowin-group">
							<label>Name</label>
							<input type="text" name="name" autocomplete="name" id='txtNama' class="lowin-input">
						</div>
						<div class="lowin-group">
							<label>Email</label>
							<input type="email" autocomplete="email" id='txtEmail' name="email" class="lowin-input">
						</div>
						<div class="lowin-group">
							<label>Password</label>
							<input type="password" name="password" id='txtPassword' autocomplete="current-password" class="lowin-input">
						</div>
              <div style='text-align:center;padding-bottom:12px;' id='divCapcha'>
                
              </div>
              <div style='text-align:center;'>
                 <input type='text' id='txtJawaban'>
              </div>
             
              <div style='text-align:center;padding-bottom:12px;' id='statLogin'>
                
              </div>
						<button class="lowin-btn" id='btnDaftar'>Sign Up</button>

						<div class="text-foot">
							Already have an account? <a href="index.html" class="login-link">Login</a>
						</div>
					
				</div>           
						
					
						
				</div>
			</div>
		
		</div>
	
		<footer class="lowin-footer">
			Gojek Ilkomp
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
