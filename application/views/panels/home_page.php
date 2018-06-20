<html>
<head>
	<title>FoodSteps - Home Page</title>
	<?php $this->load->view('header')?>
</head>
<body>
	<div class="heading">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  	<a class="brand-name" href="<?=base_url()?>/panels/home">FoodSteps</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNav">
		    	<!-- Right Float Link -->
		    	 <ul class="navbar-nav ml-auto brand-links">
				    <li class="nav-item brand-link">
			        	<a class="nav-link" href="<?=base_url()?>panels/home">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="<?=base_url()?>panels/product">Explore</a>
			      	</li>
			      	<?php
			      		if($this->session->userdata('id_user')!==null){
			      	?>
			      		<li class="nav-item brand-link">
				        	<a class="nav-link btn btn-danger" href="<?=base_url()?>auth/login/logout">Logout</a>
				      	</li>
			      	<?php
			      	}
			      	?>
				  </ul>
		  	</div>
		</nav>
	</div>

	<div class="content-home">
		<div class="content-bg-home row">
			<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

		        <div class="overlay"></div>
		        <div class="shadow-overlay"></div>

		        <div class="home-content">

		            <div class="home-content__main">

		                <h3>Welcome to FoodSteps</h3>

		                <h1>
		                    We are passionate to give you information <br>
		                    of the best food and beverage <br>
		                    shop and restaurant spot in town. <br>
		                </h1>

		                <div class="home-content__buttons">
		                    <a href="<?=base_url()?>panels/product" class="smoothscroll btn btn--stroke">
		                        Start Explore
		                    </a>
		                    <a href="#about" class="smoothscroll btn btn--stroke">
		                        More About Us
		                    </a>
		                </div>

		            </div>

		            <div class="home-content__line"></div>

		        </div> <!-- end home-content -->


		        <ul class="home-social">
		            <li>
		                <a href="#0"><i class="fab fa-facebook"></i><span>Facebook</span></a>
		            </li>
		            <li>
		                <a href="#0"><i class="fab fa-twitter"></i><span>Twiiter</span></a>
		            </li>
		            <li>
		                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
		            </li>
		        </ul> 
		        <!-- end home-social -->

		    </section> <!-- end s-home -->
		</div>
	</div>
</body>
</html>