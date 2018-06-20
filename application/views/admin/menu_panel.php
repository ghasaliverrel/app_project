<html>
<head>
	<title>Admin Panel - Manage Menu</title>
	<?php $this->load->view('header')?>
</head>
<body>
	<div class="heading">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  	<a class="brand-name" href="<?=base_url()?>admin/category">FoodSteps - Admin</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNav">
		    	<!-- Right Float Link -->
		    	<ul class="navbar-nav ml-auto brand-links">
				    <li class="nav-item brand-link">
			        	<div class="btn-group">
						  	<button type="button" class="btn btn-light"><a class="nav-link">Menu</a></button>
						  	<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    	<span class="sr-only">Toggle Dropdown</span>
						  	</button>
						  	<div class="dropdown-menu">
						    	<a class="nav-link" href="<?=base_url()?>admin/category">Categories</a>
						    	<a class="nav-link" href="<?=base_url()?>admin/partner">Partner</a>
						    	<a class="nav-link" href="<?=base_url()?>admin/menu">Menu</a>
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
			<a href="<?=base_url()?>admin/menu/add_menu"><button type="button" class="btn btn-info btn-add"><img src="<?=base_url()?>assets/img/icon/icon-1.png" style="width: 25px; height: 25px;"> Add New Menu</button></a>
			<div class="row">
				<div class="content-table col-sm-6">
					<h1 class="card-text" style="color: white; margin-bottom: 5px; text-align: left;">Tenant Panel</h1>
					<table class="table table-striped admin-table">
					  	<thead>
					    	<tr>
					      		<th scope="col">#</th>
					      		<th scope="col">Tenant</th>
					      		<th scope="col" style="text-align: center;">Action</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					  		<?php
					  		$i=1;
					  		foreach ($tenants as $row) {
					  		?>
					    	<tr>
					      		<th scope="row"><?=$i?></th>
						      	<td><?=$row->name_partner?></td>
						      	<td class="action-button">	
						      		<a partner_id='<?php echo $row->id_partner?>' class="btn btn-light btn-view" style="margin-right: 3px; color: black;">List of Menu</a>
						      	</td>
					    	</tr>
					   		<?php
					   		$i++;
					   		}	
					   		?>
					  	</tbody>
					</table>
				</div>
				<div class="content-table col-sm-6">
					<div id="show-menu">
						<div id="menu">
							<p class="tenant card-text" style="color: white;">The list of menu that related to the tenant will be showed here</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('.btn-view').click(function(){  
           var partner_id = $(this).attr("partner_id");
           $.ajax({  
                url:"<?=base_url()?>admin/menu/view_menu",  
                method:"post",  
                data:{'partner_id':partner_id},  
                success:function(data){ 
                     $('#menu').html(data);  
                     $('#show-menu').modal("show");  
                }  
            });  
      	});  
    });
</script>