<html>
<head>
	<title>Admin Panel - Insert Category Page</title>
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
				<?=form_open('admin/category/insert_data')?>
					<div class="form-group row">
				    	<label for="inputCategoryName" class="col-sm-4 col-form-label">Category Name</label>
				    	<div class="col-sm-8">
				      		<input type="text" name="categoryName" class="form-control category-input" value="<?=(isset($categories))?$categories[0]->name:set_value('name')?>">
				    	</div>
				  	</div>

				  	<div class="form-group row">
				    	<label for="inputCategoryDesc" class="col-sm-4 col-form-label">Category Description</label>
				    	<div class="col-sm-8">
				      		<!-- <input type="text" name="partnerCategory" class="form-control" value="<?=(isset($categories))?$categories[0]->description:set_value('description')?>"> -->
				      		<textarea id="textCategory" type="text" class="form-control category-input" name="categoryDescription" rows="5"><?=(isset($categories))?$categories[0]->description:set_value('description')?></textarea>
				    	</div>
				  	</div>

				  	<div class="form-group row">
                        <label for="inputImage" class="col-sm-4 col-form-label">Category Picture</label>
                        <div class="col-sm-8 fileinput fileinput-new" data-provides="fileinput">
                            <button id="btnProfilePicture" type="button" class="profile_add_btn btn btn-primary" onclick="addCategoryPic()">Choose file..</button>
                            <input id="inputCategoryPic" type="file" accept="image/*" name="inputImage" style="display:none;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <?php $image_preview = base_url()."assets/img/no-images.png"; ?>
                        <label for="imagePreview" class="col-sm-4 col-form-label">Preview</label>
                        <div class="col-sm-8">
                            <img style="width: 200px; --aspect-ratio-w: 4; --aspect-ratio-h: 3;" id="imgPreviewPicture" src="<?=(isset($categories))?$categories[0]->picture:$image_preview?>" class="profile_pic_cont" />
                        </div>
                    </div>            

				  	<div class="form-group row">
				    	<label class="col-sm-4 col-form-label"></label>
				    	<div class="col-sm-8">
				    		<input type="hidden" id="hidden_id" name="hidden_id" value="<?=(isset($categories))?$categories[0]->id_category:''?>">
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

        $("#inputCategoryPic").change(function(){
            readURL(this);
        });
    });

    function addCategoryPic(){
        document.getElementById("inputCategoryPic").click();
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