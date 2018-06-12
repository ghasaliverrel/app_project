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
			        	<a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="#">Register</a>
			      	</li>
				  </ul>
		  	</div>
		</nav>
	</div>

	<div class="content">
		<div class="content-bg">
			<div class="container-fluid content-reserv">
				<div class="heading">
					<p>Reservation</p>
				</div>
	            <div class="form content-forms" style="margin-left: 58.49px">
	                <form>
	    				<div class="row">
	    				    <div class="col-sm-6">
	                            <div class="form-group row">
	                                <label for="inputAppName" class="col-sm-4 col-form-label">Name</label>
	                                <div class="col-sm-8">
	                                    <input type="text" class="form-control" placeholder="Type Your Name">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="inputAppPackage" class="col-sm-4 col-form-label">Name of Restaurant</label>
	                                <div class="col-sm-8">
	                                    <input type="text" class="form-control" placeholder="Type Your Choice of Restaurant">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="inputAppVersion" class="col-sm-4 col-form-label">Phone Number</label>
	                                <div class="col-sm-8">
	                                    <input type="text" class="form-control" placeholder="Type Your Phone Number">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="inputAppSecret" class="col-sm-4 col-form-label">Amount of People</label>
	                                <div class="col-sm-8">
	                                    <input type="number" class="form-control">
	                                </div>
	                            </div>            
	                        </div>	
						
	    					<div class="col-sm-6">
	                            <div class="form-group row">
	                                <label for="inputAppName" class="col-sm-4 col-form-label">Restaurant Name</label>
	                                <div class="col-sm-8">
	                                    <input type="text" class="form-control" placeholder="Type Restaurant Name">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="inputAppPackage" class="col-sm-4 col-form-label">Reservation Time</label>
	                                <div class="col-sm-8">
	                                    <input type="time" class="form-control">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="inputAppVersion" class="col-sm-4 col-form-label">Food Order in Advance</label>
	                                <div class="col-sm-8">
	                                    <input type="text" class="form-control" placeholder="You want to order food in advance?">
	                                </div>
	                            </div>        
	    					</div>
	                    </div>

	                    <div class="save-button">
	                        <button type="button" class="btn btn-primary" style="width: 25%;">Save</button>
	                    </div>
	                </form>
				</div>

				<!-- <div class="content-suggestion">
					<div class="container-fluid">
						<section id="event">
					    <div class="bg-color" class="section-padding">
					      	<div class="container">
					        	<div class="row">
					          		<div class="col-xs-12 text-center" style="padding:60px;">
					            		<h1 class="header-h">Up Coming events</h1>
					            		<p class="header-p">Decorations 100% complete here</p>
					          		</div>
					          		<div class="col-md-12" style="padding-bottom:60px;"> -->

					            		<!-- <div class="item active left row">
					              			<div class="col-md-6 col-sm-6 left-images">
					                			<img src="<?= base_url()?>assets/img/reserve.jpg" class="img-responsive">
					              			</div>
					              			<div class="col-md-6 col-sm-6 details-text">
					                			<div class="cor">
					                  				<h2>Joyful party</h2>
					                  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eos suscipit earum voluptas aliquam recusandae, quae iure adipisci, inventore quia, quos delectus quaerat praesentium id expedita nihil illo accusantium, tempora.</p>
					                  				<address>
						                              	<strong>Place: </strong>
						                              	1612 Collins Str, Victoria 8007
						                              	<br>
						                              	<strong>Time: </strong>
						                              	07:30pm
					                            	</address>
					                  				<a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
					                			</div>
					              			</div>
					            		</div> -->

					          		<!-- </div>
					        	</div>
					      	</div>
					    </div>
					  	</section>
					</div>
				 --></div>
			</div>
		</div>
	</div>
</body>
</html>