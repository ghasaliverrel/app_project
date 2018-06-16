<html>
<head>
	<title>FoodSteps - Restaurant List</title>
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
			        	<a class="nav-link" href="<?=base_url()?>panels/home">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="<?=base_url()?>panels/product">Explore</a>
			      	</li>
				  </ul>
		  	</div>
		</nav>
	</div>

	<div class="content">
		<div class="content-bg">
         <?php
         foreach ($tenants as $row) {
         ?>
			<div class="item row">
	      		<div class="col-md-4 left-images">
	        		<img src="<?=$row->picture_partner?>" class="img-responsive img-thumbnail">
	      		</div>
	      		<div class="col-md-7 details-text">
	           		<div class="box">
	       				<h2 class="card-title partner-title"><?=$row->name_partner?></h2>
	       				<p class="card-text"><?=$row->description_partner?></p>
	       				<address class="card-text">
		                   	<strong>Address: </strong>
		                   	<?=$row->address_partner?>
		                   	<br>
		                   	<!-- <strong>Time: </strong>
		                   	07:30pm -->
	                    </address>
	             		<a href="<?=base_url()?>panels/product/view_spesific/<?=$row->id_partner?>" class="btn btn-light card-text">More Information</a>
	             		<a href="<?=base_url()?>panels/product/order/<?=$row->id_partner?>" class="btn btn-light card-text">Booking now!</a>
	           		</div>
	      	   	</div>
    		</div>
         <?php 
         }
         ?>
		</div>
	</div>
</body>
</html>