			<div class="span10">
				<?php if ($this->session->flashdata('fundsmsg') != '') { ?>
					<div class="alert alert-error fade in" data-alert="alert">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<span><?php echo $this->session->flashdata('fundsmsg'); ?></span>
					</div>
    			<?php } ?>
    			<?php if ($this->session->flashdata('techmsg') != '') { ?>
					<div class="alert alert-error fade in" data-alert="alert">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<span><?php echo $this->session->flashdata('techmsg'); ?></span>
					</div>
    			<?php } ?>
    			<?php if ($this->session->flashdata('soldiersmsg') != '') { ?>
					<div class="alert alert-error fade in" data-alert="alert">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<span><?php echo $this->session->flashdata('soldiersmsg'); ?></span>
					</div>
    			<?php } ?>
    			<table class="table table-bordered">
		        	<thead>
		          		<tr>
		            		<th colspan="2">Foreign Aid</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Current Funds:</td>
		            		<td><?php echo $nation_info->nation_currency . $nation_info->nation_funds; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Current Technology:</td>
		            		<td><?php echo $nation_info->nation_technology; ?></a></td>
		           		</tr>
		           		<tr>
		            		<td>Current Soldiers:</td>
		            		<td><?php echo $nation_info->nation_soldiers; ?></a></td>
		           		</tr>
		           	</tbody>
		      </table>
		      <table class="table table-bordered">
		      		<tbody>
		           		<tr>
		            		<td>Recipiant:</td>
		            		<td><?php echo $reciever_info->nation_ruler . ' of ' . $reciever_info->nation_name ; ?></a></td>
		           		</tr>
		           		<tr>
		            		<td>Recipiant's Funds:</td>
		            		<td><?php echo $nation_info->$nation_info . $reciever_info->nation_funds; ?></a></td>
		           		</tr>
		           		<tr>
		            		<td>Recipiant's Technology:</td>
		            		<td><?php echo $reciever_info->nation_technology; ?></a></td>
		           		</tr>
		           		<tr>
		            		<td>Recipiant's Soldiers:</td>
		            		<td><?php echo $reciever_info->nation_soldiers; ?></a></td>
		           		</tr>
		        	</tbody>
		      	</table>

				<form method="post" class="form-horizontal" action="<?php echo site_url('Inations/send_foreign_aid?id=' . $this->input->get('id')); ?>">
			    	<fieldset>
				       	<div class="modal-body">
					        <div class="control-group">
					            <label class="control-label" for="input01">Funds: </label>
					            <div class="controls">
					              	<input type="text" class="input-xlarge" id="input01" name="aid_funds">
					            </div>
					     	</div>
					     	<div class="control-group">
					            <label class="control-label" for="input01">Technology: </label>
					            <div class="controls">
					              	<input type="text" class="input-xlarge" id="input01" name="aid_tech">
					            </div>
					     	</div>
					     	<div class="control-group">
					            <label class="control-label" for="input01">Soldiers: </label>
					            <div class="controls">
					              	<input type="text" class="input-xlarge" id="input01" name="aid_soldiers">
					            </div>
					     	</div>
						</div>
			            <div class="modal-footer">
			              	<button type="submit" class="btn btn-primary">Send Aid</button>
			              	<a href="<?php echo base_url(); ?>" class="btn" data-dismiss="modal">Close</a>
			            </div>
				</fieldset>
			</form>
		</div>
	</section>