<h1 class="card-text" style="color: white; margin-bottom: 5px;">List of Partner(s)</h1>
<table class="table table-striped admin-table">
  	<thead>
    	<tr>
      		<th scope="col">#</th>
      		<th scope="col">Name</th>
      		<th scope="col" style="text-align: center;">Address</th>
    	</tr>
  	</thead>
  	<tbody>
  		<?php
  		if (isset($tenants)) {
  			$i=1;
  			foreach ($tenants as $row) {
  		?>
  			<tr>
	      		<th scope="row"><?=$i?></th>
		      	<td><?=$row->name_partner?></td>
		      	<td><?=$row->address_partner?></td>
	    	</tr>
  		<?php
  			$i++;
  			}
  		}
  		?>
  	</tbody>
</table>
