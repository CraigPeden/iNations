<style>
	body {
		padding-top: 0px !important;
		margin-top: 80px;
	}
</style>

<div class="container-fluid">

	<!-- Main hero unit for a primary marketing message or call to action -->
	<div class="hero-unit">
		<div class="row-fluid">
			<div class="span4">
				<img src="../../iNations/img/globe-bw.png" width="300px" height="300px"/>
			</div>
			<div class="span8">
				<h1>iNations</h1>
				<ul class="nav nav-tabs" id="#myTab">
					  <li class="active" ><a href="#login" data-toggle="tab">Login</a></li>
					  <li><a href="#signup" data-toggle="tab">Signup</a></li>
				</ul>
				<div class="tab-content">
				  	<div class="tab-pane active" id="login">
					  	<form method="post" class="form-horizontal" action="<?php echo site_url('Login/checkpassword'); ?>">
							<fieldset>
					            <?php if ($this->session->flashdata('loginfail') == TRUE) { ?>
						            <div class="alert alert-error fade in" data-alert="alert">
						                <a class="close" data-dismiss="alert" href="#">×</a>
						                <span>Login Failed</span>
						            </div>
					            <?php } ?>
					            <?php if ($this->session->flashdata('logout') == TRUE) { ?>
					                <div class="alert alert-info fade in" data-alert="alert">
						                <a class="close" data-dismiss="alert" href="#">×</a>
						                <span>You have successfully logged out.</span>
					                </div>
					            <?php } ?>
					            <?php if ($this->session->flashdata('success') != '') { ?>
					                <div class="alert alert-success fade in" data-alert="alert">
						                <a class="close" data-dismiss="alert" href="#">×</a>
						                <span><?php echo $this->session->flashdata('success'); ?></span>
					                </div>
					            <?php } ?>
					            <?php if ($this->session->flashdata('errormsg') != '') { ?>
									<div class="alert alert-error fade in" data-alert="alert">
										<a class="close" data-dismiss="alert" href="#">×</a>
										<span><?php echo $this->session->flashdata('errormsg'); ?></span>
									</div>
								<?php } ?>
					
								<div class="control-group">
						            <label class="control-label" for="xlInput">Username</label>
						            <div class="controls">
							        	<input class="input-xlarge" id="xlInput" name="username" size="30" type="text" placeholder="Username" value="<?php if ($this->session->flashdata('loginfail') == TRUE) { echo $this->session->flashdata('username'); } else { echo ''; }?>">
						            </div>
						     	</div>
						       	<div class="control-group">
						          	<label class="control-label" for="xlInput">Password</label>
						          	<div class="controls">
							            <input class="input-xlarge" id="xlInput" name="password" size="30" type="password" placeholder="Password">
						          	</div>
						     	</div>
							         
							  	<div class="form-actions">
							        <input type="submit" class="btn primary" value="Log In">&nbsp;</input>
							  	</div>
							</fieldset>      
						</form>
					</div>
					<div class="tab-pane" id="signup">						
						<form method="post" class="form-horizontal" action="<?php echo site_url('Login/add_user'); ?>">	
							<fieldset>	
						        <div class="control-group">
					            	<label class="control-label" for="xlInput">Username</label>
					            	<div class="controls">
						            	 <input class="input-xlarge" id="xlInput" name="newuser" size="30" type="text" placeholder="Username" maxlength="20">
					            	</div>
					          	</div><!-- /clearfix -->
					          	<div class="control-group">
					            	<label class="control-label" for="xlInput">Password</label>
					            	<div class="controls">
						            	<input class="input-xlarge" id="xlInput" name="newpass" size="30" type="password" placeholder="Password">
					            	</div>
					          	</div><!-- /clearfix -->
					          	<div class="control-group">
					            	<label class="control-label" for="xlInput">Confirm Password</label>
					            	<div class="controls">
						            	<input class="input-xlarge" id="xlInput" name="newpasscheck" size="30" type="password" placeholder="Confirm Password">
					            	</div>
					          	</div><!-- /clearfix -->
					          	
					          	<hr>
						       	
						       	<div class="control-group">
					            	<label class="control-label" for="xlInput">Nation Name</label>
					            	<div class="controls">
						            	 <input class="input-xlarge" id="xlInput" name="newnation" size="30" type="text" placeholder="Nation Name" maxlength="20">
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
		</div>
	</div>

<script>
  $(function () {
    $('#myTab a:first').tab('show');
  })
</script>