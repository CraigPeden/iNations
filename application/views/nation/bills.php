	<!--<section class="container">
		<div class="row">-->
			<div class="span10">
			<?php if ($this->session->flashdata('errormsg') != '') { ?>
				<div class="alert alert-error fade in" data-alert="alert">
					<a class="close" data-dismiss="alert" href="#">×</a>
					<span><?php echo $this->session->flashdata('errormsg'); ?></span>
				</div>
    		<?php } ?>
				<table class="table table-bordered">
		        	<thead>
		          		<tr>
		            		<th colspan="4">Nation Bills</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		        		<tr>
		            		<th colspan="4">Economic Bills</th>
		          		</tr>
		          		<tr>
		            		<td colspan="3">Infrastructure:</td>
		            		<td><?php echo $nation_info->nation_infrastructure; ?></td>
		          		</tr>
		          		<tr>
		            		<td colspan="3">Cost Per Infrastructure</td>
		            		<td>£<?php echo $nation_info->nation_infrastructure_upkeep; ?></td>
		          		</tr>
		          		<tr>
		            		<td colspan="3">Economic Bill Subtotal:</td>
		            		<td >£<?php echo $nation_info->nation_infrastructure * $nation_info->nation_infrastructure_upkeep; ?></a></td>
		           		</tr>
		           		<tr>
		            		<th colspan="4">Military Bills</th>
		          		</tr>
		           		<tr>
		            		<td>Soldiers:</td>
		            		<td>£1.50 each</td>
		            		<td><?php echo $nation_info->nation_soldiers; ?> Soldiers</td>
		            		<td>£<?php echo $nation_info->nation_soldiers * 1.5;?></td>
		            		
		           		</tr>
		           		<tr>
		            		<td>Tanks:</td>
		            		<td>£2 each</td>
		            		<td><?php echo $nation_info->nation_tanks; ?> Tanks</td>
		            		<td>£<?php echo $nation_info->nation_tanks * 2;?></td>
		           		</tr>
		           		<tr>
		            		<td>Planes:</td>
		            		<td>£2.50 each</td>
		            		<td><?php echo $nation_info->nation_planes; ?> Planes</td>
		            		<td>£<?php echo $nation_info->nation_planes * 2.5;?></td>
		           		</tr>
		           		<tr>
		            		<td>Nuclear Weapons:</td>
		            		<td>£250,000 each</td>
		            		<td><?php echo $nation_info->nation_nuclear_weapons; ?> Nuclear Weapons</td>
		            		<td>£<?php echo $nation_info->nation_nuclear_weapons * 250000;?></td>
		           		</tr>
		           		<tr>
		            		<td colspan="3">Military Subtotal:</td>
		            		<td>£<?php echo ($nation_info->nation_tanks * 2) + ($nation_info->nation_planes * 2.5) + ($nation_info->nation_nuclear_weapons * 250000)?></td>
		           		</tr>
		           		<tr>
		           			<th colspan="4">Total</th>
		           		</tr>
		           		<tr>
		            		<td colspan="3">Total Funds:</td>
		            		<td>£<?php echo $nation_info->nation_funds;?></td>
		           		</tr>
		           		<tr>
		            		<td colspan="3">Total Bills:</td>
		            		<td>£<?php echo ($nation_info->nation_infrastructure * $nation_info->nation_infrastructure_upkeep) + ($nation_info->nation_tanks * 2) + ($nation_info->nation_planes * 2.5) + ($nation_info->nation_nuclear_weapons * 250000)?></td>
		           		</tr>
		        	</tbody>
		      	</table>
		      		<div class="modal-footer">      		
			      		<a href="<?php echo site_url("inations/pay_bills");?>" class="btn btn-primary">Pay Bills</a>
				      	<a href="<?php echo site_url(); ?>" class="btn" data-dismiss="modal">Close</a>
			   		</div>
			</div>
		</div>
	</section>