	    	<div class="span10">
	    		<?php if ($this->session->flashdata('errormsg') != '') { ?>
					<div class="alert alert-error fade in" data-alert="alert">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<span><?php echo $this->session->flashdata('errormsg'); ?></span>
					</div>
    			<?php } ?>
    			<div class="navbar">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav">
                      <li><a href="<?php echo site_url('inations/foreign_aid?id=' . $nation_info->id); ?>"><i class="icon-gift icon"></i> Send Foreign Aid</a></li>
                      <li><a href="#"><i class="icon-warning-sign icon"></i> Declare War</a></li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
				<table class="table table-bordered">
		        	<thead>
		          		<tr>
		            		<th colspan="3">Nation Information</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		        		<tr>
		        			<td colspan="3"><?php echo $nation_info->nation_name . ', lead by ' . $nation_info->nation_ruler . ' is a well developed nation on the ' . $nation_info->nation_team_colour . ' team. Geographically, it is situated on Bob and spans an area of ' . $nation_info->nation_land . ' square miles. It is lead by a ' . $nation_info->nation_government . ' Government and the national religion is ' . $nation_info->nation_religion . '. ' . $nation_info->nation_name . ' has a population of ' . $nation_info->nation_citizens . ' who are relatively affluent with a median income of ' . $nation_info->nation_currency . $nation_info->nation_average_income . '. This is then taxed at a rate of ' . $nation_info->nation_tax_rate . '%.'; ?>
		        			</td>
		        		</tr>
		        		<tr>
		        			<td colspan="3" <?php if($nation_info->nation_citizens_density > 50) { echo 'class="alert alert-error"';} ?>><?php echo 'Population density of ' . $nation_info->nation_citizens_density . ' citizens per mile.'; ?></td>
		        		</tr>
		        		<?php if($nation_info->nation_soldiers < ($nation_info->nation_citizens / 5)) { echo '<tr><td colspan="3" class="alert alert-error">Having a national army of less than 20% of citizens risks the nation falling into disarray.</td></tr>'; } ?>
		          		<tr>
		            		<td>Nation Ruler:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_ruler; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Nation Name:</td>
		       				<td colspan="2"><?php echo $nation_info->nation_name; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Activity:</td>
		       				<td colspan="2"><?php echo "Last seen " . $activity . " ago."; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Alliance Affiliation:</td>
		            		<td><?php echo $nation_info->nation_alliance_affiliation; ?></td>
		           		</tr>
		           		<tr>
		            		<td>Team Colour:</td>
				          	<td><?php echo '<img src="../../iNations/img/team_colours/' . $nation_info->nation_team_colour . '.png" width="8px" height="8px" class="team_colour" /> ' . $nation_info->nation_team_colour; ?></td>
		           		</tr>
		           		<tr>
		            		<td>National Government:</td>
				          	<td><?php echo $nation_info->nation_government; ?></td>
		           		</tr>
		           		<tr>
		            		<td>National Religion:</td>
				          	<td><?php echo $nation_info->nation_religion; ?></td>
		           		</tr>
		           		<tr>
		            		<td>National Resources:</td>
		            		<td><?php echo $nation_info->nation_resource_one . ', ' . $nation_info->nation_resource_two; ?></td>
		           		</tr>
		           		<tr>
		            		<td>Infrastructure:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_infrastructure; ?></td>
		           		</tr>
		          		<tr>
		            		<td>Technology:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_technology; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Land:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_land; ?> Square Miles</td>
		          		</tr>
		          		<tr>
		            		<td>Funds:</td>
		            		<td colspan="2">£<?php echo $nation_info->nation_funds; ?></td>
		          		</tr>
		        	</tbody>
		      	</table>
		      	
		      	<table class="table table-bordered">
		        	<thead>
		          		<tr>
		            		<th colspan="3">Economic Information</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Citizens:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_citizens; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Average Gross Income:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_currency . $nation_info->nation_average_income; ?></td>
		           		</tr>
		           		<tr>
		            		<td>Income Tax Rate:</td>
		            		<td><?php echo $nation_info->nation_tax_rate; ?>%</td>
		           		</tr>
		        	</tbody>
		      	</table>
			   		      	
		      	<table class="table table-bordered">
		        	<thead>
		          		<tr>
		            		<th colspan="3">Military Information</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Soldiers:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_soldiers; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Tanks:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_tanks; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Nuclear Weapons:</td>
		            		<td colspan="2"><?php echo $nation_info->nation_nuclear_weapons; ?></td>
		          		</tr>
		        	</tbody>
		      	</table>   
			</div>
		</div>
	</section>