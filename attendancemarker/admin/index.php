<!-- This is the login page made for the Admin/ Professor I never really got much from Kendra of what the AI 
page looked like so I just stuck with what I had originally -->
<!DOCTYPE html>
<html lang="en" >
<head>
<script src = js/jquery-3.6.4.min.js></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/adlogin.js"></script>
  <meta charset="UTF-8">
  <title>Admin Login </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"/>
  <link rel="stylesheet" href="styles/styles.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="screen">
		<div class="screen__content">
			
				<div id = "username_warning" class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Username" id = "username">
				</div>
				<div id = "password_warning" class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" id = "password">
				</div>
				<button id = "login_admin" class="button login__submit" >Login</button>			
				<div id = "result"></div>
			
			<div class="title-page">
				<h3>ISC 496 Admin Login</h3>
				<div class="social-icons">
					
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>

