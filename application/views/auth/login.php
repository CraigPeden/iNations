<div class="container-fluid">
	<?php if ($this->session->flashdata('logout') == TRUE) { ?>
		<div class="alert alert-info fade in" data-alert="alert">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <span>You have successfully logged out.</span>
        </div> 
    <?php } ?>
    <?php if ($this->session->flashdata('loginfail') == TRUE) { ?>
		<div class="alert alert-error fade in" data-alert="alert">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <span>Login Failed</span>
        </div> 
    <?php } ?>
    <?php if ($this->session->flashdata('success') != '') { ?>
		<div class="alert alert-success fade in" data-alert="alert">
			<a class="close" data-dismiss="alert" href="#">×</a>
			<span><?php echo $this->session->flashdata('success'); ?></span>
		</div>
    <?php } ?>
		
	<form method="post" class="form-horizontal" action="<?php echo site_url('Login/checkpassword'); ?>">
		<legend>Login</legend>
		<fieldset>
			<div class="control-group">
	            <label class="control-label" for="xlInput">Username</label>
	            <div class="controls">
		        	<input class="input-xlarge" id="xlInput" name="username" size="30" type="username" placeholder="Username" value="<?php if ($this->session->flashdata('loginfail') == TRUE) { echo $this->session->flashdata('username'); } else { echo ''; }?>">
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
		        <span class="help-inline">Or <a href="<?php echo site_url('Login/sign_up'); ?>">Sign Up</a></span>
		  	</div>
		</fieldset>      
	</form>
</div>
