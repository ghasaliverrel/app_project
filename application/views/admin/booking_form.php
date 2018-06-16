<html>
<head>
	<title>Admin Panel - Insert Booking Page</title>
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
			        	<div class="btn-group">
						  	<button type="button" class="btn btn-light"><a class="nav-link">Categories</a></button>
						  	<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    	<span class="sr-only">Toggle Dropdown</span>
						  	</button>
						  	<div class="dropdown-menu">
						    	<a class="nav-link" href="<?=base_url()?>admin/category">Categories</a>
						    	<a class="nav-link" href="<?=base_url()?>admin/partner">Partner</a>
						  	</div>
						</div>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<div class="btn-group">
						  	<button type="button" class="btn btn-light"><a class="nav-link">Customers</a></button>
						  	<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    	<span class="sr-only">Toggle Dropdown</span>
						  	</button>
						  	<div class="dropdown-menu">
						    	<a class="nav-link" href="<?=base_url()?>admin/user">Customers</a>
						    	<a class="nav-link" href="<?=base_url()?>admin/booking">Booking</a>
						  	</div>
						</div>
			      	</li>
				</ul>
		  	</div>
		</nav>
	</div>

	<div class="content">
		<div class="content-bg">
			<div class="content-form">
				<?=form_open('admin/booking/insert_data/'.$bookings[0]->id_booking)?>
				  	<div class="form-group row">
				    	<label for="inputBookingName" class="col-sm-4 col-form-label">Booking Name</label>
				    	<div class="col-sm-8">
				      		<input type="text" name="bookingName" class="form-control category-input" value="<?=(isset($bookings))?$bookings[0]->name:set_value('name')?>" <?php if(isset($bookings[0]->id_booking)) echo 'readonly=""'?>>
				      		<!-- Dropdown user yang rolenya customer -->
				    	</div>
				  	</div>

				  	<div class="form-group row">
                        <label for="inputPartnerCategory" class="col-sm-4 col-form-label">Booking Tenant</label>
                        <div class="col-sm-8">  
                            <?php    
                                $selected=(isset($bookings))?$bookings[0]->partner_id:'';
                                echo form_dropdown('partnerName', $tenants, $selected,'class="form-control dropdown-vendor category-input"');
                             ?>
                        </div>
                    </div>    

				  	<div class="form-group row">
				    	<label for="inputBookingDate" class="col-sm-4 col-form-label">Booking Date</label>
				    	<div class="col-sm-8">
				      		<input type="date" name="bookingDate" class="form-control category-input" value="<?=(isset($bookings))?date('Y-m-d',strtotime($bookings[0]->booking_time)):set_value('bookingDate')?>">
				      		<!-- <input type="date" class="form-control" name="date_out" value="<?php echo isset($itemOutData->date_out) ? set_value('date_out', date('Y-m-d', strtotime($itemOutData->date_out))) : set_value('date_out'); ?>"> 
				      		'YY' ."/". 'MM' ."/". 'DD'-->
				    	</div>
				  	</div>    

				  	<div class="form-group row">
				    	<label for="inputBookingCount" class="col-sm-4 col-form-label">Count of People</label>
				    	<div class="col-sm-8">
				      		<input type="number" name="bookingCount" class="form-control category-input" value="<?=(isset($bookings))?$bookings[0]->booking_count:set_value('booking_count')?>">
				    	</div>
				  	</div>         

				  	<div class="form-group row">
				    	<label class="col-sm-4 col-form-label"></label>
				    	<div class="col-sm-8">
				    		<input type="hidden" id="hidden_id" name="hidden_id" value="<?=(isset($bookings))?$bookings[0]->id_booking:''?>">
				      		<button type="submit" class="btn btn-primary btn-submit" style="width: 75%">Submit</button>
				    	</div>
				  	</div>
				<?=form_close()?>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
    });
</script>