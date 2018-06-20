<html>
<head>
	<title>Admin Panel - Insert User Page</title>
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
						  	<button type="button" class="btn btn-light"><a class="nav-link">Categories</a></button>
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

	<div class="content-partner">
		<div class="content-bg-partner">
			<?php echo validation_errors(); ?>
			<div class="content-form">
				<?=form_open('admin/user/insert_data')?>
					<div class="form-group row">
				    	<label for="inputUserId" class="col-sm-4 col-form-label">User ID</label>
				    	<div class="col-sm-8">
				      		<input type="text" name="userId" class="form-control category-input" value="<?=(isset($users))?$users[0]->id_user:set_value('id_user')?>">
				    	</div>
				  	</div>

					<div class="form-group row">
				    	<label for="inputUserFullName" class="col-sm-4 col-form-label">User Full Name</label>
				    	<div class="col-sm-8">
				      		<input type="text" name="userName" class="form-control category-input" value="<?=(isset($users))?$users[0]->name:set_value('name')?>">
				    	</div>
				  	</div>

				  	<div class="form-group row">
                        <label for="inputUserRole" class="col-sm-4 col-form-label">User Role</label>
                        <div class="col-sm-8">  
                            <?php 
                            	if(!isset($users)){    
	                                $selected=(isset($users))?$users[0]->role_id:'';
	                                echo form_dropdown('userRole', $roles, $selected,'class="form-control dropdown-vendor category-input"');
	                            } else {
                            ?>
                            <input type="text" name="userRole" class="form-control category-input" value="<?=(isset($users))?$users[0]->role_id:set_value('userRole')?>">
                            <?php
                         	}
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
				    	<label for="inputUserAddress" class="col-sm-4 col-form-label">User Address</label>
				    	<div class="col-sm-8">
				      		<textarea id="textUserAddress" type="text" class="form-control category-input" name="userAddress" rows="3"><?=(isset($users))?$users[0]->address:set_value('address')?></textarea>
				    	</div>
				  	</div>

				  	<div class="form-group row">
				    	<label for="inputUserPhone" class="col-sm-4 col-form-label">User Phone</label>
				    	<div class="col-sm-8">
				      		<input type="tel" name="userPhone" class="form-control category-input" value="<?=(isset($users))?$users[0]->phone:set_value('phone')?>">
				    	</div>
				  	</div>

				  	<div class="form-group row">
				    	<label for="inputUserEmail" class="col-sm-4 col-form-label">User Email</label>
				    	<div class="col-sm-8">
				      		<input type="text" name="userEmail" class="form-control category-input" value="<?=(isset($users))?$users[0]->email:set_value('email')?>">
				    	</div>
				  	</div>

                    <div class="form-group row">
				    	<label for="inputUsername" class="col-sm-4 col-form-label">Username</label>
				    	<div class="col-sm-8">
				      		<input type="tel" name="username" class="form-control category-input <?=(isset($users))?'readonly':''?>" value="<?=(isset($users))?$users[0]->username:set_value('username')?>">
				    	</div>
				  	</div>      

				  	<div class="form-group row">
				    	<label class="col-sm-4 col-form-label"></label>
				    	<div class="col-sm-8">
				    		<input type="hidden" id="hidden_id" name="hidden_id" value="<?=(isset($users))?$users[0]->id_user:''?>">
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
      	var _URL = window.URL || window.webkitURL;

        $("#inputPartnerPic").change(function(){
            readURL(this);
        });
    });

    function addCategoryPic(){
        document.getElementById("inputPartnerPic").click();
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imgPreviewPicture').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
</script>