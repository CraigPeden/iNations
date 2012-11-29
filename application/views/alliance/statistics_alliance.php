	    	<div class="span10">
				<table class="table table-striped table-bordered">
	   				<thead>
				          <tr>
				            <th>ID</th>
				            <th>Nation Name</th>
				            <th>Nation Ruler</th>
				            <th>Nation Infrastructure</th>
				            <th>Nation Technology</th>
				            <th>Alliance</th>
				          </tr>
	    			</thead>
	    			<tbody>
			        	<?php 
				        	foreach($alliance_info->result() as $row)
				        	{
				        		echo '<tr>';
				        		echo '<td>' . $row->id . '</td>';
				        		echo '<td><a href="' . site_url('inations/nation?id=' . $row->id) . '">' . $row->nation_name . '</a></td>';
				        		echo '<td>' . $row->nation_ruler . '</td>';
								echo '<td>' . $row->nation_infrastructure . '</td>';
								echo '<td>' . $row->nation_technology . '</td>';
								echo '<td>' . $row->nation_alliance_affiliation . '</td>';
				        	} 
				        ?>
	    			</tbody>
	    		</table>   		      	
			</div>
		</div>	
	</section>