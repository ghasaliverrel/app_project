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
			<div class="content-image">
				<img src="<?=$tenants_left[0]->picture_partner?>">
			</div>
        	<div class="overview">
        		<p class="card-text tenant-name"><?=$tenants_left[0]->name_partner?></p>
        		<div class="tenant-category">
        			<span class="card-text"><span><?=$categories[0]->name?></span></span>
        		</div>
        		<div class="row tenant-category card-text">
        			<div class="col-sm-4">
        				<strong style="color: red;">Phone Numbers : </strong>
        				<p><?=$tenants_left[0]->phone_partner?></p>
        			</div>
        			<div class="col-sm-4">
        				<strong style="color: red;">Address : </strong>
        				<p><?=$tenants_left[0]->address_partner?></p>
        				<br>
        				<strong style="color: red;">Open At : </strong>
        				<p><?=date('H:i',strtotime($tenants_left[0]->timeopen_partner))?></p>
        				<strong style="color: red;">Close At : </strong>
        				<p><?=date('H:i',strtotime($tenants_left[0]->timeclose_partner))?></p>
        			</div>
        			<div class="col-sm-4">
        				<strong style="color: red;">Known for :</strong>
        				<?php
        				foreach ($categories as $row) {
        				?>
        					<p><?=$row->name?></p>
        				<?php
        				}
        				?>
        			</div>
        		</div>

        		<p class="card-text tenant-name">Our Special Offer</p>
        		<div class="tenant-category">
        			<span class="card-text">Enjoy restaurant's specials</span>
        		</div>
        		<div class="row tenant-category card-text">
        			<div class="col-sm-6">
        				<table class="table table-striped admin-table">
						  	<thead>
						    	<tr>
						      		<th scope="col">#</th>
						      		<th scope="col">Menu</th>
						      		<th scope="col">Price</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						  		<?php
						  		setlocale(LC_MONETARY, 'id_ID');
						  		$i=1;
						  		foreach ($tenants_left as $row) {
						  		?>
						  		<tr>
						      		<th scope="row"><?=$i?></th>
							      	<td scope="row"><?=$row->name_menu?></td>
							      	<td scope="row">Rp. <?=$row->price_menu?></td>
						    	</tr>
						   		<?php
						   		$i++;
						   		}	
						   		?>
						  	</tbody>
						</table>
        			</div>
        			<div class="col-sm-6">
        				<table class="table table-striped admin-table">
						  	<thead>
						    	<tr>
						      		<th scope="col">#</th>
						      		<th scope="col">Menu</th>
						      		<th scope="col">Price</th>
						    	</tr>
						  	</thead>
						  	<tbody>
						  		<?php
						  		setlocale(LC_MONETARY, 'id_ID');
						  		$i=1;
						  		foreach ($tenants_right as $row) {
						  		?>
						  		<tr>
						      		<th scope="row"><?=$i?></th>
							      	<td scope="row"><?=$row->name_menu?></td>
							      	<td scope="row">Rp. <?=$row->price_menu?></td>
						    	</tr>
						   		<?php
						   		$i++;
						   		}	
						   		?>
						  	</tbody>
						</table>
        			</div>
        		</div>
        	</div>
		</div>
	</div>
</body>
</html>