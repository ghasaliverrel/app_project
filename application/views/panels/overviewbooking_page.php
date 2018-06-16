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
			        	<a class="nav-link" href="<?base_url()?>panels/home">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="<?=base_url()?>panels/product">Explore</a>
			      	</li>
				  </ul>
		  	</div>
		</nav>
	</div>

	<div class="content-overview">
		<div class="content-bg-overview">
        	<div class="overview-order">
        		<p class="card-text tenant-name">REVIEW ORDER</p>
        		<div class="tenant-category card-text">
        			<div class="order_detail">
        				<strong style="color: red;">Guest Name : </strong>
        				<p><?=$overviews[0]->name?></p>
        			</div>
        			<hr>
        			<div class="order_detail">
        				<strong style="color: red;">Guest Email : </strong>
        				<p><?=$overviews[0]->email?></p>
        			</div>
        			<hr>
        			<div class="order_detail">
        				<strong style="color: red;">Restaurant Name : </strong>
        				<p><?=$overviews[0]->name_partner?></p>
        			</div>
        			<hr>
        			<div class="order_detail">
        				<strong style="color: red;">Date & Hour Booking:</strong>
        				<p><span><?=$overviews[0]->booking_date?></span> | <span><?=$overviews[0]->booking_time?></span></p>
        			</div>
        			<hr>
        			<div class="order_detail">
        				<strong style="color: red;">Food Order : </strong>
        				<?php
        				foreach ($menus as $row) {
        				?>
        					<p><?=$row->name_menu?></p>
        				<?php
        				}
        				?>
        			</div>
        			<hr>
        		</div>
        	</div>
		</div>
	</div>
</body>
</html>