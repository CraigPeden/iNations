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
			
			$data = array('nation_funds' => $new_nation_funds);
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
				
				$data = array('nation_funds' => $new_nation_funds);
				$this->db->where('id', $this->session->userdata('nation_id'));
				$this->db->update('nation_info', $data);
			}
			else {
				$this->session->set_flashdata("errormsg", 'Not enough funds.');
				redirect("inations/bills");
			}
			
		}
		
	}
	
/* End of file user_model.php */
/* Location: ../application/models */