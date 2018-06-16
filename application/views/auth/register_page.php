<html>
<head>
	<title>FoodSteps - Login Page</title>
	<?php $this->load->view('header')?>
</head>
<body>
	<div class="heading">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  	<a class="brand-name" href="#">FoodSteps</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNav">
		    	<!-- Right Float Link -->
		    	 <ul class="navbar-nav ml-auto brand-links">
				    <li class="nav-item brand-link">
			        	<a class="nav-link" href="<?=base_url()?>auth/login">Login</a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="<?=base_url()?>auth/register">Register</a>
			      	</li>
				  </ul>
		  	</div>
		</nav>
	</div>

	<div class="content">
		<div class="content-bg">
			<div class="content-box-register">
				<div class="content-login">
					<!-- <form class="login100-form validate-form"> -->
						<span class="login100-form-title">
							Welcome
						</span>

						<?=form_open('auth/register/signup')?>
							<div class="wrap-input100 validate-input">
								<input class="input100" type="email" name="email">
								<span class="focus-input100" data-placeholder="Email"></span>
							</div>

							<div class="wrap-input100 validate-input">
								<input class="input100" type="text" name="name">
								<span class="focus-input100" data-placeholder="Name"></span>
							</div>

							<div class="wrap-input100 validate-input">
								<input class="input100" type="tel" name="phone">
								<span class="focus-input100" data-placeholder="Phone"></span>
							</div>

							<div class="wrap-input100 validate-input">
								<input class="input100" type="text" name="username">
								<span class="focus-input100" data-placeholder="Username"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<span class="btn-show-pass">
									<i class="zmdi zmdi-eye"></i>
								</span>
								<input class="input100" type="password" name="password">
								<span class="focus-input100" data-placeholder="Password"></span>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn" type="submit" name="submit">Register</button>
								</div>
							</div>
						<?=form_close()?>

						<div class="text-center signup-link">
							<span class="txt1">
								Have an account?
							</span>

							<a class="txt2" href="<?=base_url()?>auth/login">
								Sign In
							</a>
						</div>
					<!-- </form> -->
				</div>
			</div>
		</div>
	</div>
</body>
</html>