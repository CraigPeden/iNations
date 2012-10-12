	    	<div class="span10">
	    		<h1 style="text-align: center;"><?php echo $alliance_stats['alliance']; ?></h1>
				<table class="table table-striped table-bordered">
	   				<thead>
				          <tr>       
				            <th>Infrastructure</th>
				            <th>Technology</th> 
				            <th>Land</th>
				            <th>Citizens</th>
				          </tr>
	    			</thead>
	    			<tbody>
	    			<tr>
						<td><?php echo $alliance_stats['infrastructure']; ?></td> 
						<td><?php echo $alliance_stats['technology']; ?></td>
						<td><?php echo $alliance_stats['land']; ?></td> 
						<td><?php echo $alliance_stats['citizens']; ?></td>
						  			
			        </tr>
	    			</tbody>
	    		</table> 
	    		<table class="table table-striped table-bordered">
	   				<thead>
				          <tr>       
				            <th>Soldiers</th>
				            <th>Tanks</th> 
				            <th>Planes</th>
				            <th>Nuclear Weapons</th>
				          </tr>
	    			</thead>
	    			<tbody>
	    			<tr>
						<td><?php echo $alliance_stats['soldiers']; ?></td> 
						<td><?php echo $alliance_stats['tanks']; ?></td>
						<td><?php echo $alliance_stats['planes']; ?></td> 
						<td><?php echo $alliance_stats['nuclear_weapons']; ?></td>
						  			
			        </tr>
	    			</tbody>
	    		</table>   		      	
			</div>
		</div>	
	</section>