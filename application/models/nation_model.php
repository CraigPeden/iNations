<?php

	class Nation_model extends CI_Model 
	{	
		function __construct()
		{
				//Call the Model constructor
				parent::__construct();
		}
		
		function timeSince ($date1)
        {
		    $time = time() - strtotime($date1); // to get the time since that moment
		    return $time;
        }
              
        function get_time_by_id($nation_id)
        {
	        return $this->db->get_where('nation_info', array('id' => $nation_id))->row()->nation_time_region;
        }
        
        function change_settings($date_format)
        {
	        $data = array('nation_time_region' => $date_format);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
        }
        
        function change_date($date, $nation_id)
		{
			switch ($this->Nation_model->get_time_by_id($nation_id))
			{
				case 'eu':  $datestring = "%d-%m-%Y";
						 	$region_date = mdate($datestring, $date); break;
				case 'us':  $datestring = "%m-%d-%Y";
						 	$region_date = mdate($datestring, $date); break;
				case 'int': $datestring = "%Y-%m-%d";
						 	$region_date = mdate($datestring, $date); break;	
			}	
			return $region_date;
		}
        
		function get_nation_by_id($nation_id) 
		{	
			return $this->db->get_where('nation_info', array('id' => $nation_id))->row();
		}
		
		function get_wonder_by_id($wonder_id)
		{
			return $this->db->get_where('wonder', array('id' => $wonder_id))->row();
		}
		
		function get_wonders() 
		{	
			return $this->db->get('wonder');
		}
		
		function get_improvements() 
		{	
			return $this->db->get('improvement');
		}
		
		function get_improvement_by_id($improvement_id)
		{
			return $this->db->get_where('improvement', array('id' => $improvement_id))->row();
		}
		
		function change_team_colour($colour)
		{
			$data = array('nation_team_colour' => $colour);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function change_tax_rate($tax_rate)
		{
			$data = array('nation_tax_rate' => $tax_rate, 'nation_changed_government' => TRUE);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function change_government($government)
		{
			$data = array('nation_government' => $government, 'nation_changed_government' => TRUE);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function change_religion($religion)
		{
			$data = array('nation_religion' => $religion, 'nation_changed_religion' => TRUE);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function change_alliance_affiliation($alliance)
		{
			$data = array('nation_alliance_affiliation' => $alliance);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function change_resources($resource1, $resource2)
		{
			$data = array('nation_resource_one' => $resource1, 'nation_resource_two' => $resource2, 'nation_changed_resources' => TRUE);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function purchase_infrastructure($cost, $infrastructure_purchase)
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			if($cost <= $nation_info->nation_funds)
			{
				$new_infrastructure_level = $nation_info->nation_infrastructure + $infrastructure_purchase;
				$new_funds_level = $nation_info->nation_funds - $cost;
				$data = array('nation_infrastructure' => $new_infrastructure_level, 'nation_funds' => $new_funds_level);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else {
				$this->session->set_flashdata('errormsg', 'Not enough funds');
			}
			
		}
		
		function purchase_technology($cost, $technology_purchase)
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			if($cost <= $nation_info->nation_funds)
			{
				$new_technology_level = $nation_info->nation_technology + $technology_purchase;
				$new_funds_level = $nation_info->nation_funds - $cost;
				$data = array('nation_technology' => $new_technology_level, 'nation_funds' => $new_funds_level);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else {
				$this->session->set_flashdata('errormsg', 'Not enough funds');
			}
			
		}
		
		function purchase_land($cost, $land_purchase)
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			if($cost <= $nation_info->nation_funds)
			{
				$new_land_level = $nation_info->nation_land + $land_purchase;
				$new_funds_level = $nation_info->nation_funds - $cost;
				$data = array('nation_land' => $new_land_level, 'nation_funds' => $new_funds_level);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else {
				$this->session->set_flashdata('errormsg', 'Not enough funds');
			}
			
		}
		
		function purchase_nuclear_weapons()
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			$cost = 250000;
			if($cost <= $nation_info->nation_funds)
			{
				$new_nuclear_weapons_level = $nation_info->nation_nuclear_weapons + 1;
				$new_funds_level = $nation_info->nation_funds - $cost;
				$data = array('nation_nuclear_weapons' => $new_nuclear_weapons_level, 'nation_funds' => $new_funds_level, 'nation_developed_nuclear_weapon' => TRUE);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else {
				$this->session->set_flashdata('errormsg', 'Not enough funds');
			}
			
		}
		
		function purchase_soldiers($cost, $soldiers_purchase)
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			if($cost <= $nation_info->nation_funds)
			{
				$new_soldiers_level = $nation_info->nation_soldiers + $soldiers_purchase;
				$new_funds_level = $nation_info->nation_funds - $cost;
				$data = array('nation_soldiers' => $new_soldiers_level, 'nation_funds' => $new_funds_level);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else {
				$this->session->set_flashdata('errormsg', 'Not enough funds');
			}
			
		}
		
		function purchase_tanks($cost, $tanks_purchase)
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			if($cost <= $nation_info->nation_funds)
			{
				$new_tanks_level = $nation_info->nation_tanks + $tanks_purchase;
				$new_funds_level = $nation_info->nation_funds - $cost;
				$data = array('nation_tanks' => $new_tanks_level, 'nation_funds' => $new_funds_level);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else {
				$this->session->set_flashdata('errormsg', 'Not enough funds');
			}
			
		}
		
		function purchase_planes($cost, $fighters_purchase, $bombers_purchase)
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			if($cost <= $nation_info->nation_funds && ($fighters_purchase + $bombers_purchase) <= 70)
			{
				$new_plane_fighter_level = $nation_info->nation_planes_fighters + $fighters_purchase;
				$new_plane_bomber_level = $nation_info->nation_planes_bombers + $bombers_purchase;
				$new_funds_level = $nation_info->nation_funds - $cost;
				$data = array('nation_planes_fighters' => $new_plane_fighter_level, 'nation_planes_bombers' => $new_plane_bomber_level, 'nation_funds' => $new_funds_level);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else if (($fighters_purchase + $bombers_purchase) > 70) {
				$this->session->set_flashdata('errormsg', 'Your nation can currently only support 70 aircraft');
			}
			else {
				$this->session->set_flashdata('errormsg', 'Not enough funds');
			}
			
		}
		
		function calculate_citizens()
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			$infra_citizens = $nation_info->nation_infrastructure * 5;
			$land_citizens = $nation_info->nation_land * 2;
			$new_citizens = $infra_citizens + $land_citizens;
			$nation_density = ($new_citizens + $nation_info->nation_soldiers) / $nation_info->nation_land;
			
			$data = array('nation_citizens' => $new_citizens, 'nation_citizens_density' => $nation_density);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function collect_taxes()
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			$taxes = (($nation_info->nation_tax_rate / 100) * ($nation_info->nation_citizens) * ($nation_info->nation_average_income));
			$old_nation_funds = $nation_info->nation_funds;
			$new_nation_funds = $old_nation_funds + $taxes;
			
			$data = array('nation_funds' => $new_nation_funds, 'nation_collected_taxes' => TRUE, 'nation_tax_collection_date' => date('Y-m-d H:i:s') );
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function pay_bills()
		{
			$soldier_upkeep = 1.5;
			$tank_upkeep = 2;
			$plane_upkeep = 2.5;
			$nuclear_weapon_upkeep = 250000;
		
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			
			$infrastructure_bills = $nation_info->nation_infrastructure * $nation_info->nation_infrastructure_upkeep;
			$soldier_bills = $nation_info->nation_soldiers * $soldier_upkeep;
			$tank_bills = $nation_info->nation_tanks * $tank_upkeep;
			$plane_bills = $nation_info->nation_planes * $plane_upkeep;
			$nuclear_weapon_bills = $nation_info->nation_nuclear_weapons * $nuclear_weapon_upkeep;
			
			$bills = $infrastructure_bills + $soldier_bills + $tank_bills + $plane_bills + $nuclear_weapon_bills;
			$old_nation_funds = $nation_info->nation_funds;
			if($bills < $old_nation_funds) {
				$new_nation_funds = $old_nation_funds - $bills;
				
				$data = array('nation_funds' => $new_nation_funds, 'nation_paid_bills' => True, 'nation_bill_payment_date' => date('Y-m-d H:i:s'));
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else {
				$this->session->set_flashdata("errormsg", 'Not enough funds.');
				redirect("inations/bills");
			}
			
		}
        
        function get_alliance_info($alliance)
        {
	        return $this->db->get_where('nation_info', array('nation_alliance_affiliation' => $alliance));
        }
        
        function get_statistic_totals($alliance)
        {
        	$query = $this->db->get_where('nation_info', array('nation_alliance_affiliation' => $alliance));
        	$alliance_infrastructure = 0;
        	$alliance_technology = 0;
        	$alliance_land = 0;
        	$alliance_citizens = 0;
        	$alliance_soldiers = 0;
        	$alliance_planes = 0;
        	$alliance_tanks = 0;
        	$alliance_nuclear_weapons = 0;
        	$alliance_nations = 0;
        	
        	
	        foreach($query->result() as $row)
	        {
		    	$alliance_infrastructure = $alliance_infrastructure + $row->nation_infrastructure;
		    	$alliance_technology = $alliance_technology + $row->nation_technology; 
		    	$alliance_land = $alliance_technology + $row->nation_land;
		    	$alliance_citizens = $alliance_citizens + $row->nation_citizens;
		    	
		    	$alliance_soldiers = $alliance_soldiers + $row->nation_soldiers;
		    	$alliance_planes = $alliance_planes + $row->nation_planes;
		    	$alliance_tanks = $alliance_tanks + $row->nation_tanks;
		    	$alliance_nuclear_weapons = $alliance_nuclear_weapons + $row->nation_nuclear_weapons;
		    	$alliance_nations = $alliance_nations++; //This can be optimized via a helper function.
	        }
	        
	        $alliance_stats = array('alliance' => $alliance, 'infrastructure' => $alliance_infrastructure, 'technology' => $alliance_technology, 'land' => $alliance_land, 'citizens' => $alliance_citizens, 'soldiers' => $alliance_soldiers, 'planes' => $alliance_planes, 'tanks' => $alliance_tanks, 'nuclear_weapons' => $alliance_nuclear_weapons);
	        
	        return $alliance_stats;
        }
        
        function wonder_correct()
        {
        	$query = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			
							if ($query->nation_wonder_stock_market) { $correct[1] = TRUE; } else { $correct[1]= FALSE; }		
							if ($query->nation_wonder_manhatten_project) { $correct[2] = TRUE; } else { $correct[2]= FALSE; }	
							if ($query->nation_wonder_social_security_system) { $correct[3] = TRUE; } else { $correct[3]= FALSE; }	
							if ($query->nation_wonder_internet) { $correct[4] = TRUE; } else { $correct[4]= FALSE; }	
							if ($query->nation_wonder_fallout_shelter_system) { $correct[5] = TRUE; } else { $correct[5]= FALSE; }		
							if ($query->nation_wonder_strategic_defense_initiative) { $correct[6] = TRUE; } else { $correct[6]= FALSE; }		
							if ($query->nation_wonder_great_monument) { $correct[7] = TRUE; } else { $correct[7]= FALSE; }		
							if ($query->nation_wonder_great_temple) { $correct[8] = TRUE; } else { $correct[8]= FALSE; }		
							if ($query->nation_wonder_nuclear_power_plant) { $correct[9] = TRUE; } else { $correct[9]= FALSE; }		
							if ($query->nation_wonder_national_healthcare_system) { $correct[10] = TRUE; } else { $correct[10]= FALSE; }		
							if ($query->nation_wonder_mining_industry_consortium) { $correct[11] = TRUE; } else { $correct[11]= FALSE; }		
							if ($query->nation_wonder_movie_industry) { $correct[12] = TRUE; } else { $correct[12]= FALSE; }				
							if ($query->nation_wonder_space_program) { $correct[13] = TRUE; } else { $correct[13]= FALSE; }						
							if ($query->nation_wonder_moon_base) { $correct[14] = TRUE; } else { $correct[14]= FALSE; }		
							if ($query->nation_wonder_moon_mine) { $correct[15] = TRUE; } else { $correct[15]= FALSE; }		
							if ($query->nation_wonder_moon_colony) { $correct[16] = TRUE; } else { $correct[16]= FALSE; } 		
							if ($query->nation_wonder_mars_base) { $correct[17] = TRUE; } else { $correct[17]= FALSE; } 		
							if ($query->nation_wonder_mars_mine) { $correct[18] = TRUE; } else { $correct[18]= FALSE; } 		
							if ($query->nation_wonder_mars_colony) { $correct[19] = TRUE; } else { $correct[19]= FALSE; } 		
        
							return $correct;
        
        }
        
        function check_wonder($wonder_id)
        {
            $query = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			switch ($wonder_id)
						{
							case 1: $current_wonder_quantity = $query->nation_wonder_stock_market;		break;
							case 2: $current_wonder_quantity = $query->nation_wonder_manhatten_project;	break;
							case 3: $current_wonder_quantity = $query->nation_wonder_social_security_system;	break;
							case 4: $current_wonder_quantity = $query->nation_wonder_internet;	break;
							case 5: $current_wonder_quantity = $query->nation_wonder_fallout_shelter_system;		break;
							case 6: $current_wonder_quantity = $query->nation_wonder_strategic_defense_initiative;		break;
							case 7: $current_wonder_quantity = $query->nation_wonder_great_monument;		break;
							case 8: $current_wonder_quantity = $query->nation_wonder_great_temple;		break;
							case 9: $current_wonder_quantity = $query->nation_wonder_nuclear_power_plant;		break;
							case 10: $current_wonder_quantity = $query->nation_wonder_national_healthcare_system;		break;
							case 11: $current_wonder_quantity = $query->nation_wonder_mining_industry_consortium;		break;
							case 12: $current_wonder_quantity = $query->nation_wonder_movie_industry;		break;				
							case 13: $current_wonder_quantity = $query->nation_wonder_space_program;		break;						
							case 14: $current_wonder_quantity = $query->nation_wonder_moon_base;		break;
							case 15: $current_wonder_quantity = $query->nation_wonder_moon_mine;		break;
							case 16: $current_wonder_quantity = $query->nation_wonder_moon_colony; 		break;
							case 17: $current_wonder_quantity = $query->nation_wonder_mars_base; 		break;
							case 18: $current_wonder_quantity = $query->nation_wonder_mars_mine; 		break;
							case 19: $current_wonder_quantity = $query->nation_wonder_mars_colony; 		break;
						}
						
			return $current_wonder_quantity;
        }
        
        function check_taxes()
        {
	        if ($this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_collected_taxes) {
		        return TRUE;
		       }
		    else {
		    	return FALSE;
	        }
        }
        
        function check_religion()
        {
	        if ($this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_changed_religion) {
		        return TRUE;
		       }
		    else {
		    	return FALSE;
	        }
        }
        
        function check_government()
        {
	        if ($this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_changed_government) {
		        return TRUE;
		       }
		    else {
		    	return FALSE;
	        }
        }
        
        function check_team()
        {
	        if ($this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_changed_team) {
		        return TRUE;
		       }
		    else {
		    	return FALSE;
	        }
        }
        
        function check_resources()
        {
	        if ($this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_changed_resources) {
		        return TRUE;
		       }
		    else {
		    	return FALSE;
	        }
        }
        
        function paid_bills() 
        {
	       if ($this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_paid_bills == TRUE) 
	       		{ 
	       			$nation_check->bills = TRUE;
	       			return $nation_check;   
	       		}
	       	else
	       		{
		       		return FALSE;
	       		}       	 
        }
        
        function collected_taxes() 
        {
	       if ($this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_collected_taxes == TRUE) 
	       		{ 
	       			$nation_check->taxes = TRUE;
	       			return $nation_check;   
	       		}
	       	else
	       		{
		       		return FALSE;
	       		}       	 
        }
        
        function changed_religion()
        {
	        if ($this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_changed_religion == TRUE) 
	       		{ 
	       			$nation_check->taxes = TRUE;
	       			return $nation_check;   
	       		}
	       	else
	       		{
		       		return FALSE;
	       		} 
        }
        
        function activity()
        {
	    	$last_collect = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_collected_taxes_date; 	
	    	$nation_check->activity = $this->nation_model->timeSince($last_collect);
	    	return $nation_check;
	    }   
	    
	    /////////////////////
	    /// Improvements
	    
	    		
		function check_improvement_quantity($improvement_id)
		{
			$query = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			switch ($improvement_id)
						{
							case 1: $current_improvement_quantity = $query->nation_improvement_banks;		break;
							case 2: $current_improvement_quantity = $query->nation_improvement_stadiums;	break;
							case 3: $current_improvement_quantity = $query->nation_improvement_barracks;	break;
							case 4: $current_improvement_quantity = $query->nation_improvement_border_walls;	break;
							case 5: $current_improvement_quantity = $query->nation_improvement_churches;		break;
							case 6: $current_improvement_quantity = $query->nation_improvement_clinics;		break;
							case 7: $current_improvement_quantity = $query->nation_improvement_drydocks;		break;
							case 8: $current_improvement_quantity = $query->nation_improvement_factories;		break;
							case 9: $current_improvement_quantity = $query->nation_improvement_foreign_ministries;		break;
							case 10: $current_improvement_quantity = $query->nation_improvement_guerrila_camps;		break;
							case 11: $current_improvement_quantity = $query->nation_improvement_banks;		break;
							case 12: $current_improvement_quantity = $query->nation_improvement_banks;		break;				
							case 13: $current_improvement_quantity = $query->nation_improvement_banks;		break;						
							case 14: $current_improvement_quantity = $query->nation_improvement_banks;		break;
							case 15: $current_improvement_quantity = $query->nation_improvement_banks;		break;
							case 16: $current_improvement_quantity = $query->nation_improvement_banks; 		break;
						}
						
			return $current_improvement_quantity;

		}
	     
        function nation_purchase_improvement($improvement_id)
        {
	        $nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
	        $improvement = $this->db->get_where('improvement', array('id' => $improvement_id))->row();
	        
	        $new_funds_level = $nation_info->nation_funds - $improvement->improvement_cost;
	        $current_improvement_quantity = $this->Nation_model->check_improvement_quantity($improvement_id);
	        $current_improvement_max = $improvement->improvement_max_quantity;
	        
	        if (($improvement->improvement_cost <= $nation_info->nation_funds) && ($current_improvement_quantity < $current_improvement_max)) 
	       		{ 
	       			$query = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();

	       			switch ($improvement_id)
						{
							case 1: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 2: $current_improvement_quantity = $nation_info->nation_improvement_stadiums;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_stadiums' => ($current_improvement_quantity + 1));
								
								break;
							case 3: $current_improvement_quantity = $nation_info->nation_improvement_barracks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_barracks' => ($current_improvement_quantity + 1)); 
								
								break;
							case 4: $current_improvement_quantity = $nation_info->nation_improvement_border_walls;

								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 5: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 6: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 7: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 8: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 9: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 10: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 11: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
								
							case 12: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
								
							case 13: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
								
							case 14: $current_improvement_quantity = $nation_info->nation_improvement_banks;
							$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
							break;
							
							case 15: $current_improvement_quantity = $nation_info->nation_improvement_banks;
								$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
								break;
							case 16: $current_improvement_quantity = $nation_info->nation_improvement_banks;
							$data = array('nation_funds' => $new_funds_level, 'nation_improvement_banks' => ($current_improvement_quantity + 1)); 
							break;
						}
						
	       			$this->db->where('id', $this->session->userdata('nation_id'));
	       			$this->db->update('nation_info', $data); 
	       			redirect('iNations/improvement?id=' . $improvement_id);
	       		}
	       	
	       	else
	       		{
		       		$this->session->set_flashdata('errormsg', 'Not Enough Funds.');
		       		redirect('iNations/improvement?id=' . $improvement_id);
	       		}   
        }
        
        function nation_purchase_wonder($wonder_id)
        {
	        $nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
	        $wonder = $this->db->get_where('wonder', array('id' => $wonder_id))->row();
	        
	        $new_funds_level = $nation_info->nation_funds - $wonder->wonder_cost;
	        $current_wonder_quantity = $this->Nation_model->check_wonder($wonder_id);
	        
	        if (($wonder->wonder_cost <= $nation_info->nation_funds) && ($current_wonder_quantity == FALSE) && ($this->Nation_model->timesince($nation_info->nation_wonder_developed) > 2592000)) 
	       		{ 
	       			$query = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();

	       			switch ($wonder_id)
						{
							case 1: $current_wonder_quantity = $query->nation_wonder_stock_market;		
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_stock_market' => TRUE, 'nation_wonder_developed' => date('Y-m-d')); break;
							case 2: $current_wonder_quantity = $query->nation_wonder_manhatten_project;
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_manhatten_project' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 3: $current_wonder_quantity = $query->nation_wonder_social_security_system;
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_social_security_system' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 4: $current_wonder_quantity = $query->nation_wonder_internet;	
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_internet' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 5: $current_wonder_quantity = $query->nation_wonder_fallout_shelter_system;	
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_fallout_shelter_system' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 6: $current_wonder_quantity = $query->nation_wonder_strategic_defense_initiative;
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_strategic_defense_initiative' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));		break;
							case 7: $current_wonder_quantity = $query->nation_wonder_great_monument;	
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_great_monument' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 8: $current_wonder_quantity = $query->nation_wonder_great_temple;
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_great_temple' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));		break;
							case 9: $current_wonder_quantity = $query->nation_wonder_nuclear_power_plant;	
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_nuclear_power_plant' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 10: $current_wonder_quantity = $query->nation_wonder_national_healthcare_system;
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_national_healthcare_system' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));		break;
							case 11: $current_wonder_quantity = $query->nation_wonder_mining_industry_consortium;	
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_mining_industry_consortium' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 12: $current_wonder_quantity = $query->nation_wonder_movie_industry;	
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_movie_industry' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;				
							case 13: $current_wonder_quantity = $query->nation_wonder_space_program;
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_space_program' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));		break;						
							case 14: $current_wonder_quantity = $query->nation_wonder_moon_base;
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_moon_base' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));		break;
							case 15: $current_wonder_quantity = $query->nation_wonder_moon_mine;		
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_moon_mine' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 16: $current_wonder_quantity = $query->nation_wonder_moon_colony; 
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_moon_colony' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));		break;
							case 17: $current_wonder_quantity = $query->nation_wonder_mars_base; 	
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_mars_base' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
							case 18: $current_wonder_quantity = $query->nation_wonder_mars_mine; 
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_mars_mine' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));		break;
							case 19: $current_wonder_quantity = $query->nation_wonder_mars_colony; 	
							$data = array('nation_funds' => $new_funds_level, 'nation_wonder_mars_colony' => TRUE, 'nation_wonder_developed' => date('Y-m-d'));	break;
						}						
	       			$this->db->where('id', $this->session->userdata('nation_id'));
	       			$this->db->update('nation_info', $data); 
	       			redirect('iNations/wonders');
	       		}
	       	
	       	else
	       		{	
	       			$errormsg = null;
	       			if ($wonder->wonder_cost > $nation_info->nation_funds) {
		       			
		       			$errormsg = 'Not enough funds.';
	       			}
	       			
	       			if ($current_wonder_quantity == TRUE) {
	       				$errormsg = $errormsg . 'You already own this wonder.';
		       			
	       			}
	       			if ($this->Nation_model->timesince($nation_info->nation_wonder_developed) <= 2592000) {
		       			$errormsg = $errormsg . 'You can only build one wonder per month.';
	       			}
		       		$this->session->set_flashdata('errormsg', $errormsg);
		       		redirect('iNations/wonder?id=' . $wonder_id);
	       		}   
        }
        
        function foreign_aid($nation_reciever_id, $foreign_aid)
        {
        	$nation_sender_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();

        	if ($foreign_aid->funds <= 3000000 && $foreign_aid->tech <= 50 && $foreign_aid->soldiers) 
        		{
        			$nation_sender = array('nation_funds' => $nation_sender_info->nation_funds - $foreign_aid->funds, 'nation_technology' => $nation_sender_info->nation_technology - $foreign_aid->tech, 'nation_soldiers' => $nation_sender_info->nation_soldiers - $foreign_aid->soldiers);
			        $this->db->where('id', $this->session->userdata('nation_id'));
			       	$this->db->update('nation_info', $nation_sender); 
			       	$nation_reciever_info = $this->db->get_where('nation_info', array('id' => $nation_reciever_id))->row();
			   
			       	$nation_reciever = array('nation_funds' => ($nation_reciever_info->nation_funds + $foreign_aid->funds), 'nation_technology' => ($nation_reciever_info->nation_technology + $foreign_aid->tech), 'nation_soldiers' => ($nation_reciever_info->nation_soldiers + $foreign_aid->soldiers));
			       	
			       	$this->db->where('id', $nation_reciever_id);
			       	$this->db->update('nation_info', $nation_reciever); 
			       	redirect('inations/nation?id=' . $nation_reciever_id);
			    }
			else {
	        	if ($foreign_aid->funds > 3000000) {
		        	$this->session->set_flashdata('fundsmsg','Maximum funds transfer of ' . $nation_sender_info->nation_currency . '3,000,000.');
	        	}
	        	if ($foreign_aid->tech > 50) {
		        	$this->session->set_flashdata('techmsg','Maximum tech transfer of 50.');
	        	}
	        	if ($foreign_aid->soldiers > 1000) {
		        	$this->session->set_flashdata('soldiersmsg','Maximum soldier transfer of 1000.');
	        	}
	        	
	        	redirect('inations/foreign_aid?id=' . $nation_reciever_id);
        	}		       	

        }

	}
	
/* End of file user_model.php */
/* Location: ../application/models */