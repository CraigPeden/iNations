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
		       				<td colspan="2"><?php echo "Last seen " . $activity->level . " ago."; ?></td>
		          		</tr>
		          		<tr>
		            		<td>Alliance Affiliation:</td>
		            		<td><?php echo $nation_info->nation_alliance_affiliation; ?></td>
		            		<td><a data-toggle="modal" href="#allianceModal" class="">Edit</a></td>
		           		</tr>
		           		<tr>
		            		<td>Team Colour:</td>
				          	<td><?php echo '<img src="../../iNations/img/team_colours/' . $nation_info->nation_team_colour . '.png" width="8px" height="8px" class="team_colour" /> ' . $nation_info->nation_team_colour; ?></td>
				          	<td><a data-toggle="modal" href="#colourModal" class="">Edit</a></td>
		           		</tr>
		           		<tr>
		            		<td>National Government:</td>
				          	<td><?php echo $nation_info->nation_government; ?></td>
				          	<td><a data-toggle="modal" href="#governmentModal" class="">Edit</a></td>
		           		</tr>
		           		<tr>
		            		<td>National Religion:</td>
				          	<td><?php echo $nation_info->nation_religion; ?></td>
				          	<td><a data-toggle="modal" href="#religionModal" class="">Edit</a></td>
		           		</tr>
		           		<tr>
		            		<td>National Resources:</td>
		            		<td><?php echo $nation_info->nation_resource_one . ', ' . $nation_info->nation_resource_two; ?></td>
		            		<td><a data-toggle="modal" href="#resourceModal" class="">Edit</a><!--<a href="<?php echo site_url('iNations/resources'); ?>">Edit--></td>
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
		            		<td colspan="2"><?php echo $nation_info->nation_currency . $nation_info->nation_funds; ?></td>
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
		            		<td colspan="2"><?php echo $nation_info->nation_currency . $nation_info->nation_average_income; ?></a></td>
		           		</tr>
		           		<tr>
		            		<td>Income Tax Rate:</td>
		            		<td><?php echo $nation_info->nation_tax_rate; ?>%</td>
		            		<td><a data-toggle="modal" href="#taxModal" class="">Edit</a></td>
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
			
			<div id="allianceModal" class="modal hide fade" style="display: none; ">
	            <div class="modal-header">
	            	<a class="close" data-dismiss="modal">×</a>
	              	<h3>Alliance Affiliation</h3>
	            </div>
	            <p class="alert alert-info no-radius-border">Select an alliance affiliation for your nation.</p>
		       	<form method="post" class="form-horizontal clearmargin" action="<?php echo site_url('Inations/change_affiliation'); ?>">
		       		<fieldset>
			       		<div class="modal-body">
				        	<div class="control-group">
				            	<label class="control-label" for="input01">Alliance:</label>
				            	<div class="controls">
				              		<input type="text" class="input-xlarge" id="input01" name="allianceAffiliation" placeholder="<?php echo $nation_info->nation_alliance_affiliation;?>">
				            	</div>
				          	</div>
					   	</div>
			            <div class="modal-footer">
			              	<button type="submit" class="btn btn-primary">Save changes</button>
			              	<a href="#" class="btn" data-dismiss="modal">Close</a>
			            </div>
			      	</fieldset>
			   	</form>
			</div>
			
			<div id="colourModal" class="modal hide fade" style="display: none; ">
	            <div class="modal-header">
	            	<a class="close" data-dismiss="modal">×</a>
	              	<h3>Team Colour</h3>
	            </div>
	            <p class="alert alert-info no-radius-border">Select a team colour for your nation.</p>
	            <form method="post" class="form-horizontal clearmargin" action="<?php echo site_url('Inations/change_colour'); ?>">
		            <fieldset>
		            	<div class="modal-body">
	          				<div class="control-group">
	            				<label class="control-label">Colours:</label>
	            				<div class="controls">
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour13" value="None" <?php if($nation_info->nation_team_colour == 'None') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/none.png" height="8px" width="8px" /> None
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour1" value="Red" <?php if($nation_info->nation_team_colour == 'Red') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/red.png" height="8px" width="8px" /> Red
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour2" value="Blue" <?php if($nation_info->nation_team_colour == 'Blue') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/blue.png" height="8px" width="8px" /> Blue
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour3" value="Green" <?php if($nation_info->nation_team_colour == 'Green') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/green.png" height="8px" width="8px" /> Green
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour4" value="Pink" <?php if($nation_info->nation_team_colour == 'Pink') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/pink.png" height="8px" width="8px" /> Pink
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour5" value="Purple" <?php if($nation_info->nation_team_colour == 'Purple') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/purple.png" height="8px" width="8px" /> Purple
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour6" value="Orange" <?php if($nation_info->nation_team_colour == 'Orange') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/orange.png" height="8px" width="8px" /> Orange
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour7" value="Grey" <?php if($nation_info->nation_team_colour == 'Grey') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/grey.png" height="8px" width="8px" /> Grey
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour8" value="Black" <?php if($nation_info->nation_team_colour == 'Black') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/black.png" height="8px" width="8px" /> Black
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour9" value="White" <?php if($nation_info->nation_team_colour == 'White') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/white.png" height="8px" width="8px" /> White
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour10" value="Aqua" <?php if($nation_info->nation_team_colour == 'Aqua') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/aqua.png" height="8px" width="8px" /> Aqua
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour11" value="Yellow" <?php if($nation_info->nation_team_colour == 'Yellow') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/yellow.png" height="8px" width="8px" /> Yellow
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioColour" id="radioColour12" value="Brown" <?php if($nation_info->nation_team_colour == 'Brown') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/brown.png" height="8px" width="8px" /> Brown              					
	                				</label>
	            				</div>
	          				</div>
	          			</div>
			            <div class="modal-footer">
			            	<?php if ($nation_info->nation_changed_team = TRUE) { ?>
			            		<span class="alert alert-error pull-left alert-modal">Only change team once daily.</span>
			            		<a href="#" class="btn btn-primary" disabled>Save changes</a>
			            	<?php } else { ?>
			              		<button type="submit" class="btn btn-primary">Save changes</button>
			              	<?php } ?>
			              	<a href="#" class="btn" data-dismiss="modal">Close</a>
			            </div>
		      	 	</fieldset>
		      	 </form>
			</div>
			<div id="governmentModal" class="modal hide fade" style="display: none; ">
	            <div class="modal-header">
	            	<a class="close" data-dismiss="modal">×</a>
	              	<h3>National Government</h3>
	            </div>
	            <p class="alert alert-info no-radius-border">Select a style of government for your nation.</p>
	            <form method="post" class="form-horizontal clearmargin" action="<?php echo site_url('Inations/change_government'); ?>">
		            <fieldset>
		            	<div class="modal-body">
	          				<div class="control-group">
	            				<label class="control-label">Governments:</label>
	            				<div class="controls">
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment1" value="Anarchist" <?php if($nation_info->nation_government == 'Anarchist') { echo 'checked=""'; } ?> disabled="disabled"> <img class="team_colour" src="../../iNations/img/team_colours/red.png" height="8px" width="8px" /> Anarchist
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment2" value="Capitalist" <?php if($nation_info->nation_government == 'Capitalist') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/blue.png" height="8px" width="8px" /> Capitalist
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment3" value="Communist" <?php if($nation_info->nation_government == 'Communist') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/blue.png" height="8px" width="8px" /> Communist
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment4" value="Democratic" <?php if($nation_info->nation_government == 'Democracy') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/green.png" height="8px" width="8px" /> Democratic
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment5" value="Dictorial" <?php if($nation_info->nation_government == 'Dictorial') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/green.png" height="8px" width="8px" /> Dictatorship
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment6" value="Federalist" <?php if($nation_info->nation_government == 'Federalist') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/green.png" height="8px" width="8px" /> Federalist
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment7" value="Monarchist" <?php if($nation_info->nation_government == 'Monarchist') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/pink.png" height="8px" width="8px" /> Monarchist
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment8" value="National Socialist" <?php if($nation_info->nation_government == 'National Socialist') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/purple.png" height="8px" width="8px" /> National Socialist
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment9" value="Revolutionist" <?php if($nation_info->nation_government == 'Revolutionist') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/orange.png" height="8px" width="8px" /> Revolutionist
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioGovernment" id="radioGovernment10" value="Totalitarianist" <?php if($nation_info->nation_government == 'Totalitarianist') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/grey.png" height="8px" width="8px" /> Totalitarianist
	              					</label>
	            				</div>
	          				</div>
	          			</div>
			            <div class="modal-footer">
			              	<?php if ($nation_info->nation_changed_government = TRUE) { ?>
			            		<span class="alert alert-error pull-left alert-modal">Only change government once daily.</span>
			            		<a href="#" class="btn btn-primary" disabled>Save changes</a>
			            	<?php } else { ?>
			              		<button type="submit" class="btn btn-primary">Save changes</button>
			              	<?php } ?>
			              	<a href="#" class="btn" data-dismiss="modal">Close</a>
			            </div>
		      	 	</fieldset>
		      	 </form>
			</div>
			<div id="religionModal" class="modal hide fade" style="display: none; ">
	            <div class="modal-header">
	            	<a class="close" data-dismiss="modal">×</a>
	              	<h3>National Religion</h3>
	            </div>
	            <p class="alert alert-info no-radius-border">Select a national religion for your nation.</p>
	            <form method="post" class="form-horizontal clearmargin" action="<?php echo site_url('Inations/change_religion'); ?>">
		            <fieldset>
		            	<div class="modal-body">
	          				<div class="control-group">
	            				<label class="control-label">Religions:</label>
	            				<div class="controls">
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion1" value="Buddhism" <?php if($nation_info->nation_religion == 'Buddhism') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/red.png" height="8px" width="8px" /> Buddhism
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion2" value="Christianity" <?php if($nation_info->nation_religion == 'Christianity') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/blue.png" height="8px" width="8px" /> Christianity
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion3" value="Hindu" <?php if($nation_info->nation_religion == 'Hindu') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/blue.png" height="8px" width="8px" /> Hindu
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion4" value="Islam" <?php if($nation_info->nation_religion == 'Islam') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/green.png" height="8px" width="8px" /> Islam
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion5" value="Jewish" <?php if($nation_info->nation_religion == 'Jewish') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/green.png" height="8px" width="8px" /> Jewish
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion6" value="None" <?php if($nation_info->nation_religion == 'None') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/green.png" height="8px" width="8px" /> None
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion7" value="Shinto" <?php if($nation_info->nation_religion == 'Shinto') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/pink.png" height="8px" width="8px" /> Shinto
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion8" value="Sikh" <?php if($nation_info->nation_religion == 'Sikh') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/purple.png" height="8px" width="8px" /> Sikh
	              					</label>
	              					<label class="radio">
	                					<input type="radio" name="radioReligion" id="radioReligion9" value="Taoism" <?php if($nation_info->nation_religion == 'Taoism') { echo 'checked=""'; } ?>> <img class="team_colour" src="../../iNations/img/team_colours/orange.png" height="8px" width="8px" /> Taoism
	              					</label>
	            				</div>
	          				</div>
	          			</div>
			            <div class="modal-footer">
			            	<?php if ($nation_info->nation_changed_religion = TRUE) { ?>
			            		<span class="alert alert-error pull-left alert-modal">Only change religion once daily.</span>
			            		<a href="#" class="btn btn-primary" disabled>Save changes</a>
			            	<?php } else { ?>
			              		<button type="submit" class="btn btn-primary">Save changes</button>
			              	<?php } ?>
			              	<a href="#" class="btn" data-dismiss="modal">Close</a>
			            </div>
		      	 	</fieldset>
		      	 </form>
			</div>
			<div id="taxModal" class="modal hide fade" style="display: none; ">
	            <div class="modal-header">
	            	<a class="close" data-dismiss="modal">×</a>
	              	<h3>Income Tax Rate</h3>
	            </div>
	            <p class="alert alert-info no-radius-border">Select an income tax rate for your nation.</p>
	            <form method="post" class="form-horizontal clearmargin" action="<?php echo site_url('Inations/change_tax_rate'); ?>">
		            <fieldset>
		            	<div class="modal-body">
	          				<div class="control-group">
            					<label class="control-label" for="select01">Select list</label>
            					<div class="controls">
              						<select id="select01" name="tax_rate">
              							<?php for($counter = 10; $counter < 29 ; $counter++) 
              									{
              										$stuff = $counter;
              										echo '<option';
													if ($stuff == $nation_info->nation_tax_rate) {
														echo ' selected="selected"';
													} 
													echo '>' .$counter . '%</option>';
												}
										?>
              						</select>
            					</div>
          					</div>
	          			</div>
			            <div class="modal-footer">
			            <?php 
			            if ($nation_info->nation_changed_taxes) { ?>
			            		<span class="alert alert-error pull-left alert-modal">Only change tax rate once daily.</span>
			            		<a href="#" class="btn btn-primary" disabled="">Save changes</a>
			            	<?php } else { ?>
			              		<button type="submit" class="btn btn-primary">Save changes</button>
			              	<?php } ?>
			              	<a href="#" class="btn" data-dismiss="modal">Close</a>
			            </div>
		      	 	</fieldset>
		      	 </form>
			</div>
			<div id="resourceModal" class="modal hide fade" style="display: none; ">
	            <div class="modal-header">
	            	<a class="close" data-dismiss="modal">×</a>
	              	<h3>Resources</h3>
	            </div>
	            <p class="alert alert-info no-radius-border">Select two resources for your nation.</p>
					<form method="post" class="form-horizontal" action="<?php echo site_url('Inations/change_resources'); ?>">
				    	<fieldset>
				    		<div class="span12">
								<div class="span6" style="padding-left:20px;">
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsCoal" value="Coal" <?php if($nation_info->nation_resource_one == 'Coal') { echo 'checked=""'; } ?>>
									  Coal
									</label>
									<label class="radio">
										<input type="radio" name="optionsResources" id="optionsPigs" value="Pigs" <?php if($nation_info->nation_resource_one == 'Pigs') { echo 'checked=""'; } ?>>
									 Pigs
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsIron" value="Iron" <?php if($nation_info->nation_resource_one == 'Iron') { echo 'checked=""'; } ?>>
									 Iron
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsUranium" value="Uranium" <?php if($nation_info->nation_resource_one == 'Uranium') { echo 'checked=""'; } ?>>
									  Uranium							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsWater" value="Water" <?php if($nation_info->nation_resource_one == 'Water') { echo 'checked=""'; } ?>>
									  Water
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsSugar" value="Sugar" <?php if($nation_info->nation_resource_one == 'Sugar') { echo 'checked=""'; } ?>>
									  Sugar							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsSilver" value="Silver" <?php if($nation_info->nation_resource_one == 'Silver') { echo 'checked=""'; } ?>>
									  Silver
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsLead" value="Lead" <?php if($nation_info->nation_resource_one == 'Lead') { echo 'checked=""'; } ?>>
									  Lead							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsLumber" value="Lumber" <?php if($nation_info->nation_resource_one == 'Lumber') { echo 'checked=""'; } ?>>
									  Lumber
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsAluminium" value="Aluminium" <?php if($nation_info->nation_resource_one == 'Aluminium') { echo 'checked=""'; } ?>>
									  Aluminium							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsCattle" value="Cattle" <?php if($nation_info->nation_resource_one == 'Cattle') { echo 'checked=""'; } ?>>
									  Cattle
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsRubber" value="Rubber" <?php if($nation_info->nation_resource_one == 'Rubber') { echo 'checked=""'; } ?>>
									  Rubber							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResources" id="optionsFish" value="Fish" <?php if($nation_info->nation_resource_one == 'Fish') { echo 'checked=""'; } ?>>
									  Fish							
									</label>						
								</div>
								<div class="span6">
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsCoal" value="Coal" <?php if($nation_info->nation_resource_two == 'Coal') { echo 'checked=""'; } ?>>
									  Coal
									</label>
									<label class="radio">
										<input type="radio" name="optionsResourcesTwo" id="optionsPigs" value="Pigs" <?php if($nation_info->nation_resource_two == 'Pigs') { echo 'checked=""'; } ?>>
									 Pigs
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsIron" value="Iron" <?php if($nation_info->nation_resource_two == 'Iron') { echo 'checked=""'; } ?>>
									 Iron
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsUranium" value="Uranium" <?php if($nation_info->nation_resource_two == 'Uranium') { echo 'checked=""'; } ?>>
									  Uranium							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsWater" value="Water" <?php if($nation_info->nation_resource_two == 'Water') { echo 'checked=""'; } ?>>
									  Water
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsSugar" value="Sugar" <?php if($nation_info->nation_resource_two == 'Sugar') { echo 'checked=""'; } ?>>
									  Sugar							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsSilver" value="Silver" <?php if($nation_info->nation_resource_two == 'Silver') { echo 'checked=""'; } ?>>
									  Silver
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsLead" value="Lead" <?php if($nation_info->nation_resource_two == 'Lead') { echo 'checked=""'; } ?>>
									  Lead							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsLumber" value="Lumber" <?php if($nation_info->nation_resource_two == 'Lumber') { echo 'checked=""'; } ?>>
									  Lumber
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsAluminium" value="Aluminium" <?php if($nation_info->nation_resource_two == 'Aluminium') { echo 'checked=""'; } ?>>
									  Aluminium							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsCattle" value="Cattle" <?php if($nation_info->nation_resource_two == 'Cattle') { echo 'checked=""'; } ?>>
									  Cattle
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsRubber" value="Rubber" <?php if($nation_info->nation_resource_two == 'Rubber') { echo 'checked=""'; } ?>>
									  Rubber							
									</label>
									<label class="radio">
									  <input type="radio" name="optionsResourcesTwo" id="optionsFish" value="Fish" <?php if($nation_info->nation_resource_one == 'Fish') { echo 'checked=""'; } ?>>
									  Fish							
									</label>						
								</div>
				    		</div>
						</fieldset>
					<div class="modal-footer" style="margin-top: 30px;">
						<?php if ($nation_info->nation_changed_resources = TRUE) { ?>
			            		<span class="alert alert-error pull-left alert-modal">Only change resources once daily.</span>
			            		<a href="#" class="btn btn-primary" disabled>Change Resources</a>
			            	<?php } else { ?>
			              		<button type="submit" class="btn btn-primary">Change Resources</button>
			              	<?php } ?>
				        <a href="<?php echo base_url(); ?>" class="btn" data-dismiss="modal">Close</a>
				    </div>
			</form>
		</div>
	</section>