	<div class="container-fluid">
		<div class="row-fluid">
			<?php if ($this->session->flashdata('errormsg') != '') { ?>
				<div class="alert alert-error fade in" data-alert="alert">
					<a class="close" data-dismiss="alert" href="#">×</a>
					<p><?php echo $this->session->flashdata('errormsg'); ?></p>
				</div>
		    <?php } ?>
		
			<form method="post" class="form-horizontal" action="<?php echo site_url('Login/add_user'); ?>">	
				<fieldset>
		        	<legend>Sign Up</legend>
			        <div class="control-group">
		            	<label class="control-label" for="xlInput">Username</label>
		            	<div class="controls">
			            	 <input class="input-xlarge" id="xlInput" name="newuser" size="30" type="username">
		            	</div>
		          	</div><!-- /clearfix -->
		          	<div class="control-group">
		            	<label class="control-label" for="xlInput">Password</label>
		            	<div class="controls">
			            	<input class="input-xlarge" id="xlInput" name="newpass" size="30" type="password">
		            	</div>
		          	</div><!-- /clearfix -->
		          	<div class="control-group">
		            	<label class="control-label" for="xlInput">Confirm Password</label>
		            	<div class="controls">
			            	<input class="input-xlarge" id="xlInput" name="newpasscheck" size="30" type="password">
		            	</div>
		          	</div><!-- /clearfix -->
		          	<legend>Nation</legend>	
			       	<div class="control-group">
		            	<label class="control-label" for="xlInput">Nation Name</label>
		            	<div class="controls">
			            	 <input class="input-xlarge" id="xlInput" name="newnation" size="30" type="username">
		            	</div>
		          	</div><!-- /clearfix -->         
			        <div class="form-actions">
			        	<input type="submit" class="btn primary" value="Sign Up">&nbsp;</button>
			       	</div>		        
			  	</fieldset>       
			</form>
		</div>
	</div>
</div>