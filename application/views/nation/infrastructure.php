	<style>
		.team_colour {
			border: black 1px solid;
		}
	</style>
	
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
		            		<th colspan="2">Infrastructure</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Current Infrastructure:</td>
		            		<td><?php echo $nation_info->nation_infrastructure; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Current Citizens:</td>
		            		<td><?php echo $nation_info->nation_citizens; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Current Funds:</td>
		            		<td>£<?php echo $nation_info->nation_funds; ?></a></td>
		           		</tr>
		        	</tbody>
		      	</table>

				<form method="post" class="form-horizontal" action="<?php echo site_url('Inations/buy_infrastructure'); ?>">
			    	<fieldset>
				       	<div class="modal-body">
					        <div class="control-group">
					            <label class="control-label" for="input01">Infrastructure: </label>
					            <div class="controls">
					              	<input type="text" class="input-xlarge" id="input01" name="buy_infrastructure">
					            </div>
					     	</div>
						</div>
			            <div class="modal-footer">
			              	<button type="submit" class="btn btn-primary">Develop Infrastructure</button>
			              	<a href="<?php echo base_url(); ?>" class="btn" data-dismiss="modal">Close</a>
			            </div>
				</fieldset>
			</form>
		</div>
	</section>