<html>
<head>
	<title>FoodSteps - Booking Page</title>
	<?php $this->load->view('header')?>
</head>
<body>
	<div class="heading">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  	<a class="brand-name" href="<?=base_url()?>panels/home">FoodSteps</a>
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

	<div class="content">
		<div class="content-bg">
			<div class="container-fluid content-reserv">
				<div class="heading">
					<p>Reservation</p>
				</div>
	            <div class="form content-forms card-text" style="margin-left: 58.49px">
	                <?=form_open('panels/product/insert_order/'.$tenants[0]->id_partner)?>
	                	<div class="form-group row">
                            <label for="inputPartnerName" class="col-sm-4 col-form-label">Name of Restaurant</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control category-input" name="partnerName" placeholder="Type Your Choice of Restaurant" readonly="" value="<?=(isset($tenants))?$tenants[0]->name_partner:set_value('partnerName')?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputBookingCount" class="col-sm-4 col-form-label">Amount of People</label>
                            <div class="col-sm-8">
                                <input type="number" name="bookingCount" class="form-control category-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputBookingDate" class="col-sm-4 col-form-label">Reservation Date</label>
                            <div class="col-sm-8">
                                <input type="date" name="bookingDate" class="form-control category-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputBookingTime" class="col-sm-4 col-form-label">Reservation Time</label>
                            <div class="col-sm-8">
                                <input type="time" name="bookingTime" class="form-control category-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputBookingMenu" class="col-sm-4 col-form-label">Food Order in Advance</label>
                            <div class="col-sm-8">
                                <?php
	                                echo form_dropdown('positionName', $positions, '','class="form-control dropdown-vendor category-input"');
	                             ?>
                            </div>
                        </div>

	                    <div class="save-button">
	                        <button type="submit" class="btn btn-primary" style="width: 25%;">Save</button>
	                    </div>
	                <?=form_close()?>
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