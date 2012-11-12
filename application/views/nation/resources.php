			<div class="span10">
				<?php if ($this->session->flashdata('errormsg') != '') { ?>
					<div class="alert alert-error fade in" data-alert="alert">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<span><?php echo $this->session->flashdata('errormsg'); ?></span>
					</div>
    			<?php } ?>

				<form method="post" class="form-horizontal" action="<?php echo site_url('Inations/change_resources'); ?>">
			    	<fieldset>
						<div class="span5">
							<h3>Resource 1</h3>
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
						</div>
						<div class="span5">
							<h3>Resource 2</h3>
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
						</div>
					</fieldset>
				<div class="modal-footer" style="margin-top: 30px;">
			              	<button type="submit" class="btn btn-primary">Change Resources</button>
			              	<a href="<?php echo base_url(); ?>" class="btn" data-dismiss="modal">Close</a>
			            </div>
			</form>
		</div>
	</section>