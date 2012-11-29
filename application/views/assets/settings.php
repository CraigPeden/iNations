	    	<div class="span10">
				<form method="post" class="form-horizontal" action="<?php echo site_url('iNations/change_settings'); ?>">
		<legend>Settings</legend>
		<fieldset>
			<div class="control-group">
	            <label class="control-label" for="xlInput">Date Format</label>
	            <div class="controls">
		        	<label class="radio">
			        	<input type="radio" name="optionsDateFormat" id="optionsDateEU" value="eu" <?php if($nation_info->nation_time_region == 'eu') { echo 'checked'; }?>>
			        		European - dd/mm/yyyy
			        </label>
 
			        <label class="radio">
				        <input type="radio" name="optionsDateFormat" id="optionsDateUS" value="us" <?php if($nation_info->nation_time_region == 'us') { echo 'checked'; }?>>
				        	American - mm/dd/yyyy
				    </label>
				    <label class="radio">
					    <input type="radio" name="optionsDateFormat" id="optionsDateINT" value="int" <?php if($nation_info->nation_time_region == 'int') { echo 'checked'; }?>>
					    	International - yyyy-mm-dd
					</label>
	            </div>
	     	</div>  
		  	<div class="form-actions">
		        <input type="submit" class="btn primary" value="Save Settings">&nbsp;</input>
		  	</div>
		</fieldset>      
	</form>

			</div>	
	</section>