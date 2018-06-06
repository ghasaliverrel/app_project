<html>
<head>
	<title>Admin Panel - Insert Page</title>
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
			        	<a class="nav-link" href="#">Categories</a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="#">Partners</a>
			      	</li>
			      	<li class="nav-item brand-link">
			        	<a class="nav-link" href="#">Customers</a>
			      	</li>
				</ul>
		  	</div>
		</nav>
	</div>

	<div class="content">
		<div class="content-bg">
			<div class="content-table">
				<table class="table table-striped admin-table">
				  	<thead>
				    	<tr>
				      		<th scope="col">#</th>
				      		<th scope="col">Categories</th>
				      		<th scope="col" style="text-align: center;">Action</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				    	<tr>
				      		<th scope="row">1</th>
					      	<td>Fine Dining</td>
					      	<td class="action-button">
					      		<button type="button" class="btn btn-light">Edit</button>
					      		<button type="button" class="btn btn-light">List of Place</button>
					      	</td>
				    	</tr>
				    	<tr>
				      		<th scope="row">2</th>
				      		<td>Restaurant</td>
					      	<td class="action-button">
					      		<button type="button" class="btn btn-light">Edit</button>
					      		<button type="button" class="btn btn-light">List of Place</button>
					      	</td>
				    	</tr>
				    	<tr>
				      		<th scope="row">3</th>
				      		<td>Fresh Seafood</td>
					      	<td class="action-button">
					      		<button type="button" class="btn btn-light">Edit</button>
					      		<button type="button" class="btn btn-light">List of Place</button>
					      	</td>
				    	</tr>
				    	<tr>
				      		<th scope="row">4</th>
				      		<td>Breakfast</td>
					      	<td class="action-button">
					      		<button type="button" class="btn btn-light">Edit</button>
					      		<button type="button" class="btn btn-light">List of Place</button>
					      	</td>
				    	</tr>
				    	<tr>
				      		<th scope="row">5</th>
				      		<td>Snack</td>
					      	<td class="action-button">
					      		<button type="button" class="btn btn-light">Edit</button>
					      		<button type="button" class="btn btn-light">List of Place</button>
					      	</td>
				    	</tr>
				    	<tr>
				      		<th scope="row">6</th>
				      		<td>Grilled Food</td>
					      	<td class="action-button">
					      		<button type="button" class="btn btn-light">Edit</button>
					      		<button type="button" class="btn btn-light">List of Place</button>
					      	</td>
				    	</tr>
				  	</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>