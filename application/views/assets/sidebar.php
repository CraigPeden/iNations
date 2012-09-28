	<section class="container-fluid margin_topup">
		<div class="row-fluid">
			<div class="span2">
				<div class="well" style="padding: 8px 0;">
        			<ul class="nav nav-list">
          				<li class="nav-header">Nation Information</li>
          				<li<?php if(uri_string() == "") { echo ' class="active" '; } ?>><a href="<?php echo base_url(); ?>"><i class="icon-home"></i> View My Nation</a></li>
          				<li class="nav-header">Economic Purchasing</li>
				      	<li<?php if(uri_string() == "inations/infrastructure") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/infrastructure");?>"><i class="icon-road"></i> Buy Infrastructure</a></li>
				       	<li<?php if(uri_string() == "inations/technology") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/technology");?>"><i class="icon-signal"></i> Buy Technology</a></li>
				       	<li<?php if(uri_string() == "inations/land") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/land");?>"><i class="icon-leaf"></i> Buy Land</a></li>
				       	<li class="divider"></li>
				       	<li<?php if(uri_string() == "inations/improvements") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/improvements");?>"><i class="icon-plus"></i> Buy Improvements</a></li>
				       	<li<?php if(uri_string() == "inations/wonders") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/wonders");?>"><i class="icon-star"></i> Buy Wonders</a></li>
				      	<li class="nav-header">Military Purchasing</li>
				       	<li<?php if(uri_string() == "inations/soldiers") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/soldiers");?>"><i class="icon-screenshot"></i> Train Soldiers</a></li>
				       	<li<?php if(uri_string() == "inations/tanks") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/tanks");?>"><i class="icon-magnet"></i> Assemble Tanks</a></li>
				       	<li<?php if(uri_string() == "inations/planes") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/planes");?>"><i class="icon-plane"></i> Assemble Planes</a></li>
				       	<li<?php if(uri_string() == "inations/nuclear_weapons") { echo ' class="active" '; }?>><p href="<?php echo site_url("inations/nuclear_weapons");?>"><i class="icon-fire"></i> Nuclear Weapons</p></li>
				       	<li class="nav-header">Nation Income</li>
				       	<li<?php if(uri_string() == "inations/taxes") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/taxes");?>"><i class="icon-gift"></i> Collect Taxes</a></li>
				       	<li<?php if(uri_string() == "inations/bills") { echo ' class="active" '; }?>><a href="<?php echo site_url("inations/bills");?>"><i class="icon-list-alt"></i> Pay Bills</a></li>
				       	<li class="nav-header">Server Time</li>
        				<li><?php echo unix_to_human(now(), FALSE, 'eu'); ?></li>
        			</ul>
      			</div>
			</div>
