	<!--<section class="container">
		<div class="row">-->
			<div class="span10">
				<table class="table table-bordered">
		        	<thead>
		          		<tr>
		            		<th colspan="3">Nation Taxes</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Citizens:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_citizens; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Average Gross Income:</td>
		            		<td colspan="2">£<?php echo $nation_info->nation_average_income; ?></a></td>
		           		</tr>
		           		<tr>
		            		<td>Income Tax Rate:</td>
		            		<td><?php echo $nation_info->nation_tax_rate; ?>%</td>
		           		</tr>
		           		<tr>
		            		<td>Total Funds:</td>
		            		<td><?php echo $nation_info->nation_funds; ?></td>
		           		</tr>
		           		<tr>
		            		<td>Total Taxes:</td>
		            		<td>£<?php echo (($nation_info->nation_tax_rate / 100) * $nation_info->nation_citizens * $nation_info->nation_average_income) ?></td>
		           		</tr>
		           		<tr>
		            		<td>Total After Taxes:</td>
		            		<td>£<?php echo $nation_info->nation_funds + (($nation_info->nation_tax_rate / 100) * $nation_info->nation_citizens * $nation_info->nation_average_income) ?></td>
		           		</tr>
		        	</tbody>
		      	</table>
		      		<div class="modal-footer">
		      			<?php if ($nation_info->nation_collected_taxes == TRUE) 
		      			{ ?>
			      			<span class="alert alert-error pull-left">You can only collect taxes once a day.</span><a href="#" class="btn btn-primary" disabled>Collect Taxes</a>
		      			<?php }     		
		      			
		      			else { ?>
			      			<a href="<?php echo site_url("inations/collect_taxes"); ?> " class="btn btn-primary">Collect Taxes</a>'
			      		<?php } ?>
				      	<a href="<?php echo site_url(); ?>" class="btn" data-dismiss="modal">Close</a>
			   		</div>
			</div>
		</div>
	</section>