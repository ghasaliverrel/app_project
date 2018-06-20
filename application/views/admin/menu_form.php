<html>
<head>
	<title>Admin Panel - Insert Menu Page</title>
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
			<div class="content-form">
				<?=form_open('admin/menu/insert_data')?>
					<div class="form-group row">
				    	<label for="inputMenuName" class="col-sm-4 col-form-label">Menu Name</label>
				    	<div class="col-sm-8">
				      		<input type="text" name="menuName" class="form-control category-input" value="<?=(isset($menus))?$menus[0]->name_menu:set_value('name_menu')?>">
				    	</div>
				  	</div>

				  	<div class="form-group row">
                        <label for="inputPartnerName" class="col-sm-4 col-form-label">Partner Name</label>
                        <div class="col-sm-8">  
                            <?php  
                                $selected=(isset($menus))?$menus[0]->partner_id:'';
                                echo form_dropdown('partnerName', $tenants, $selected,'class="form-control dropdown-vendor category-input"');
                            ?>
                        </div>
                    </div>  

				  	<div class="form-group row">
                        <label for="inputPartnerPosition" class="col-sm-4 col-form-label">Menu Position</label>
                        <div class="col-sm-8">  
                            <?php
                                $selected=(isset($menus))?$menus[0]->position_menu:'';
                                echo form_dropdown('menuPosition', $positions, $selected,'class="form-control dropdown-vendor category-input"');
                            ?>
                        </div>
                    </div>

				  	<div class="form-group row">
				    	<label for="inputMenuPrice" class="col-sm-4 col-form-label">Menu Price</label>
				    	<div class="col-sm-8">
				      		<input type="number" name="menuPrice" class="form-control category-input" value="<?=(isset($menus))?$menus[0]->price_menu:set_value('price_menu')?>">
				    	</div>
				  	</div>         

				  	<div class="form-group row">
				    	<label class="col-sm-4 col-form-label"></label>
				    	<div class="col-sm-8">
				    		<input type="hidden" id="hidden_id" name="hidden_id" value="<?=(isset($menus))?$menus[0]->id_menu:''?>">
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