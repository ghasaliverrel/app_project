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
			        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="<?=base_url()?>panels/product">Explore</a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="#">About</a>
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
			<div class="item active left row">
      		<div class="col-md-6 col-sm-6 left-images">
        			<img src="<?=$row->picture?>" class="img-responsive">
      		</div>
      		<div class="col-md-6 col-sm-6 details-text">
           		<div class="sor">
       				<h2><?=$row->name_partner?></h2>
       				<p><?=$row->description?></p>
       				<address>
                   	<strong>Place: </strong>
                   	<?=$row->address_partner?>
                   	<br>
                   	<!-- <strong>Time: </strong>
                   	07:30pm -->
                   </address>
             		<a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
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