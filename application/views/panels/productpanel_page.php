<html>
<head>
	<title>FoodSteps - Explore Page</title>
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
		<div class="content-bg row">
			<!-- <div class="row"> -->
				<div class="col-sm-12">
					<div class="content-boxs">
						<div class="row">
							<?php
				  			foreach ($categories as $row) {
				  			?>
								<div class="content-boxs col-sm-3 mt-2 ml-1">
									<div class="card">
									  	<img class="card-img-top" src="<?=$row->picture_category?>" alt="Card image cap">
									  	<div class="card-body">
									    	<h5 class="card-title"><?=$row->name?></h5>
									    	<p class="card-text"><?=$row->description_category?></p>
									  	</div>
									  	<div class="card-body">
									    	<a href="<?=base_url()?>panels/product/view_restaurant/<?=$row->id_category?>" class="card-link">Find the best <?=strtolower($row->name)?> place >></a>
									  	</div>
									</div>
								</div>
							<?php	
				  			}
				  			?>
						</div>
					</div>
				</div>
			<!-- </div> -->
		</div>
	</div>
</body>
</html>