<html>
<head>
	<title>Admin Panel - Manage Booking</title>
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
						  	<button type="button" class="btn btn-light"><a class="nav-link">Booking</a></button>
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
			<a href="<?=base_url()?>admin/booking/add_booking"><button type="button" class="btn btn-info btn-add"><img src="<?=base_url()?>assets/img/icon/icon-2.png" style="width: 25px; height: 25px;"> Add New Booking</button></a>
			<div class="content-table col-sm-6">
				<h1 class="card-text" style="color: white; margin-bottom: 5px; text-align: left;">Booking Panel</h1>
				<table class="table table-striped admin-table">
				  	<thead>
				    	<tr>
				      		<th scope="col">#</th>
				      		<th scope="col">Booking ID</th>
				      		<th scope="col">Booking Name</th>
				      		<th scope="col">Booking Place</th>
				      		<th scope="col" style="text-align: center;">Action</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				  		<?php
				  		$i=1;
				  		foreach ($bookings as $row) {
				  		?>
				    	<tr>
				      		<th scope="row"><?=$i?></th>
					      	<td><?=$row->id_booking?></td>
					      	<td><?=$row->name?></td>
					      	<td><?=$row->name_partner?></td>
					      	<td class="action-button">
					      		<a class="btn btn-light" href="<?=base_url()?>admin/booking/modify_booking/<?=$row->id_booking?>" style="margin-right: 3px;">Edit</a>
					      		<a class="btn btn-light" href="<?=base_url()?>admin/booking/delete_booking/<?=$row->id_booking?>" style="margin-right: 3px;" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</a>
					      	</td>
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
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
	
    });
</script>