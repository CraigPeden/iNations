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
		            		<th>Improvement</th>
		            		<th>Cost</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<?php
		          			echo '<tr>
		          						<td>' . $improvement_info->improvement_name . '</td>
		          						<td>' . $nation_info->nation_currency . $improvement_info->improvement_cost . '</td>
		          				 </tr>';
		          		
		          		?>
		        	</tbody>
		      	</table>
		      	<img class="img-rounded img-improvement" src="../../iNations/img/<?php echo $improvement_info->improvement_name;?>.jpg" />
		      	<p style="padding-top:10px;">You have developed <?php echo $improvement_quantity;?> out of <?php echo $improvement_info->improvement_max_quantity . ' ' . $improvement_info->improvement_name . '.'; ?></p>
		      	<div class="modal-footer">
		      		<?php if ($improvement_quantity < $improvement_info->improvement_max_quantity) { ?>
		      		<a class="btn btn-primary" href="<?php echo site_url('iNations/purchase_improvement?id=' . $improvement_info->id);?> ">Develop <?php echo $improvement_info->improvement_name;?></a>
		      		<?php } else { ?>
		      		<span class="alert alert-error pull-left">You may only build a maximum of <?php echo $improvement_info->improvement_max_quantity . ' ' . $improvement_info->improvement_name .'.'; ?></span>
		      		<a class="btn btn-primary" href="#" disabled>Develop <?php echo $improvement_info->improvement_name;?></a> 
		      		<?php } ?>
		      		<a class="btn" href="<?php echo site_url(); ?>">Close</a>
		      	</div>
			</div>
		</div>
	</section>