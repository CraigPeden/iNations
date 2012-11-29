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
		            		<th>Wonder</th>
		            		<th>Cost</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<?php
		          			echo '<tr>
		          						<td>' . $wonder_info->wonder_name . '</td>
		          						<td>' . $nation_info->nation_currency . $wonder_info->wonder_cost . '</td>
		          				 </tr>';
		          		
		          		?>
		        	</tbody>
		      	</table>
		      	<img class="img-rounded" src="../../iNations/img/stadiums.jpg" />
		      	<div class="modal-footer" style="margin-top: 40px;">
		      		<?php if ($wonder_quantity) { ?>
		      			<span class="alert alert-success pull-left">Your nation has already developed this wonder!</span>
		      			<a href="#" class="btn btn-primary" disabled>Purchase <?php echo $wonder_info->wonder_name; ?></a>
		      		<?php } else if($this->Nation_model->timesince($nation_info->nation_wonder_developed) <= 2592000) { ?>
		      			<span class="alert alert-success pull-left">Your nation can only develop one wonder per month.</span>
		      			<a href="#" class="btn btn-primary" disabled>Purchase <?php echo $wonder_info->wonder_name; ?></a>
		      		<?php } else { ?>
		      			<a href="<?php echo site_url('iNations/purchase_wonder?id=' . $wonder_info->id);?>" class="btn btn-primary">Purchase <?php echo $wonder_info->wonder_name; ?></a>
		      		<?php } ?>
		      		<a class="btn" href="<?php echo site_url();?>">Close</a>
		      	</div>
			</div>
		</div>
	</section>