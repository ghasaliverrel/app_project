<h1 class="card-text" style="color: white; margin-bottom: 5px;">List of Menu(s)</h1>
<table class="table table-striped admin-table">
  	<thead>
    	<tr>
      		<th scope="col">#</th>
      		<th scope="col">Name</th>
      		<th scope="col" style="text-align: center;">Action</th>
    	</tr>
  	</thead>
  	<tbody>
  		<?php
  		if (isset($menus)) {
  			$i=1;
  			foreach ($menus as $row) {
  		?>
  			<tr>
	      		<th scope="row"><?=$i?></th>
		      	<td><?=$row->name_menu?></td>
		      	<td class="action-button">
              <a class="btn btn-light" href="<?=base_url()?>admin/menu/modify_menu/<?=$row->id_menu?>" style="margin-right: 3px;">Edit</a>
              <a class="btn btn-light" href="<?=base_url()?>admin/menu/delete_menu/<?=$row->id_menu?>" style="margin-right: 3px;" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</a>
            </td>
	    	</tr>
  		<?php
  			$i++;
  			}
  		}
  		?>
  	</tbody>
</table>
