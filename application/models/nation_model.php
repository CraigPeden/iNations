<?php

	class Nation_model extends CI_Model 
	{	
		function __construct()
		{
				//Call the Model constructor
				parent::__construct();
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
		
		function change_team_colour($colour)
		{
			$data = array('nation_team_colour' => $colour);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function change_tax_rate($tax_rate)
		{
			$data = array('nation_tax_rate' => $tax_rate);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function change_government($government)
		{
			$data = array('nation_government' => $government);
			$this->db->where('id', $this->session->userdata('nation_id'));
			$this->db->update('nation_info', $data);
		}
		
		function change_religion($religion)
		{
			$data = array('nation_religion' => $religion);
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
			$data = array('nation_resource_one' => $resource1, 'nation_resource_two' => $resource2);
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
				$data = array('nation_nuclear_weapons' => $new_nuclear_weapons_level, 'nation_funds' => $new_funds_level);
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
		
		function purchase_planes($cost, $planes_purchase)
		{
			$nation_info = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row();
			if($cost <= $nation_info->nation_funds)
			{
				$new_planes_level = $nation_info->nation_tanks + $planes_purchase;
				$new_funds_level = $nation_info->nation_funds - $cost;
				$data = array('nation_planes' => $new_planes_level, 'nation_funds' => $new_funds_level);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
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
        
        
        function check_wonder($nation_id, $wonder)
        {
            /* TO DO */
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
        
        function activity()
        {
	    	$last_collect = $this->db->get_where('nation_info', array('id' => $this->session->userdata('nation_id')))->row()->nation_collected_taxes_date; 	
	    	$nation_check->activity = $this->nation_model->timeSince($last_collect);
	    	return $nation_check;
	    }    		
	}
	
/* End of file user_model.php */
/* Location: ../application/models */