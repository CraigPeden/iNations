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
		            		<th colspan="2">Planes</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		        		<tr>
		        			<th>Current Plane Level</th>
		        			<th><?php if ($nation_info->nation_technology > 200) { echo 'Level 9'; } ?></th>
		        		</tr>
		        	</tbody>
		        	<thead>
		          		<tr>
		            		<th>Fighters</th>
		            		<th>Bombers</th>
		          		</tr> 		
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td><?php echo $nation_info->nation_planes_fighters; ?></td>
		            		<td><?php echo $nation_info->nation_planes_bombers; ?></td>
		          		</tr>
		        	</tbody>
    			</table>
    			<table class="table-bordered table">
    				<tbody>
		           		<tr>
		            		<td>Current Funds:</td>
		            		<td><?php echo $nation_info->nation_currency . $nation_info->nation_funds; ?></a></td>
		           		</tr>
		        	</tbody>
		      	</table>

				<form method="post" class="form-horizontal" action="<?php echo site_url('Inations/buy_planes'); ?>">
			    	<fieldset>
				       	<div class="modal-body">
					        <div class="control-group">
					            <label class="control-label" for="input01">Fighters: </label>
					            <div class="controls">
					              	<input type="text" class="input-xlarge" id="input01" name="buy_plane_fighter">
					            </div>
					     	</div>
					     	<div class="control-group">
					            <label class="control-label" for="input01">Bombers: </label>
					            <div class="controls">
					              	<input type="text" class="input-xlarge" id="input01" name="buy_plane_bomber">
					              	<p class="help-block">Positive value to assemble. Negative value to decommission.</p>

					            </div>
					     	</div>
						</div>
			            <div class="modal-footer">
			              	<button type="submit" class="btn btn-primary">Assemble Planes</button>
			              	<a href="<?php echo base_url(); ?>" class="btn" data-dismiss="modal">Close</a>
			            </div>
				</fieldset>
			</form>
		</div>
	</section>