<html>
<head>
	<title>Admin Panel - User Page</title>
	<?php $this->load->view('header')?>
	<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
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
			<a href="<?=base_url()?>admin/user/add_user"><button type="button" class="btn btn-info btn-add"><img src="<?=base_url()?>assets/img/icon/icon-1.png" style="width: 25px; height: 25px;"> Add New User</button></a>
			<div class="content-table">
				<h1 class="card-text" style="color: white; margin-bottom: 5px;">User Panel</h1>
				<table class="table table-striped admin-table" id="userTable">
				  	<thead>
				    	<tr>
				      		<th scope="col">#</th>
				      		<th scope="col">Full Name</th>
				      		<th scope="col">Username</th>
				      		<th scope="col">Email</th>
				      		<th scope="col" style="text-align: center;">Action</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				  		<?php
				  		$i=1;
				  		foreach ($users as $row) {
				  		?>
				    	<tr>
				      		<th scope="row"><?=$i?></th>
					      	<td><?=$row->name?></td>
					      	<td><?=$row->username?></td>
					      	<td><?=$row->email?></td>
					      	<td class="action-button">
					      		<a class="btn btn-light" href="<?=base_url()?>admin/user/modify_user/<?=$row->id_user?>" style="margin-right: 3px;">Edit</a>
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
		 // $('#partnerTable').DataTable({"bSort":false});
    });
</script>