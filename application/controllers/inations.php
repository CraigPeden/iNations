<?php 

	class Inations extends CI_Controller 
	{

		function __construct() 
		{
			
			parent::__construct();
			if (!$this->User_model->logged_in()) 
			{
				$this->session->set_flashdata('current_url', uri_string());
				redirect('Login');	
			}
		}

		///////////////////////////////
		//Main Page					//
		/////////////////////////////
		
		function timeSince ($date1)
        {
		    $time = time() - $date1; // to get the time since that moment
		    $tokens = array (
		        31536000 => 'year',
		        2592000 => 'month',
		        604800 => 'week',
		        86400 => 'day',
		        3600 => 'hour',
		        60 => 'minute',
		        1 => 'second'
		    );
		
		    foreach ($tokens as $unit => $text) 
		    {
		        if ($time < $unit) continue;
		        $numberOfUnits = floor($time / $unit);
		        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
		    }
        }
		
		function index()
		{	
			
			$stuff = $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'));
			$activity->level = $this->timeSince(strtotime($stuff->nation_tax_collection_date));
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/main', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id')), 'activity' => $activity));
			$this->load->view('assets/footer');
		}
		
		function settings()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('assets/settings', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function change_settings()
		{
			$date_format = $this->input->post('optionsDateFormat');
			$this->Nation_model->change_settings($date_format);
			redirect('inations/settings');
		}
		
		function nation()
		{	
			$query = $this->Nation_model->get_nation_by_id($this->input->get('id'));
			$activity = $this->timeSince(strtotime($query->nation_tax_collection_date));
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/nations', array('nation_info' => $this->Nation_model->get_nation_by_id($this->input->get('id')), 'activity' => $activity));
			$this->load->view('assets/footer');
		}
        
        function about()
        {
            $this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('masthead/about');
			$this->load->view('assets/footer');
        }
		
		function infrastructure()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/infrastructure', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}

		function resources()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/resources', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function technology()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/technology', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function land()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/land', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function soldiers()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/soldiers', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function tanks()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/tanks', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function planes()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/planes', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
        
        // Nuclear Weapoons
        
        function nuclear_weapons()
        {
            $this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/nuclear_weapons', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
        }
        
        function purchase_nuclear_weapon()
        {
            if (TRUE == TRUE) {
                $this->Nation_model->purchase_nuclear_weapons();
                redirect('inations');
            }
            else {
                $this->session->set_flashdata("error", 'Requires Manhatten Project');
                redirect('inations/purchase_nuclear_weapons');
            }
                
        }
        
        // Taxes
		
		function taxes()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/taxes', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
        
		function collect_taxes()
		{
			$this->Nation_model->collect_taxes();
			redirect('inations');
		}
		
        // Bills
        
		function bills()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/bills', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
        
		function pay_bills()
		{
			$this->Nation_model->pay_bills();
			redirect('inations');
		}
        
        // Wonders
		
		function wonders()
		{	
			$query = $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'));
			$wonder_date = $this->Nation_model->change_date(strtotime($query->nation_wonder_developed), $this->session->userdata('nation_id'));
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/wonders', array('wonder_info' => $this->Nation_model->get_wonders(), 'correct' => $this->Nation_model->wonder_correct(), 'nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id')), 'wonder_date' => $wonder_date));
			$this->load->view('assets/footer');
		}
		
		function wonder()
		{
			$wonder_id = $this->input->get('id');
			
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/wonder', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id')), 'wonder_info' => $this->Nation_model->get_wonder_by_id($wonder_id), 'wonder_quantity' => $this->Nation_model->check_wonder($wonder_id)));
			$this->load->view('assets/footer');
		}
		
		function purchase_wonder()
		{
			$wonder_id = $this->input->get('id');
			$this->Nation_model->nation_purchase_wonder($wonder_id);
		}
		
		// Improvements
		
		function improvements()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/improvements', array('improvement_info' => $this->Nation_model->get_improvements()));
			$this->load->view('assets/footer');
		}
		
		function improvement()
		{
			$improvement_id = $this->input->get('id');
			
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/improvement', array('improvement_info' => $this->Nation_model->get_improvement_by_id($improvement_id), 'nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id')), 'improvement_quantity' => $this->Nation_model->check_improvement_quantity($improvement_id)));
			$this->load->view('assets/footer');
		}
		
		function purchase_improvement()
		{
			$improvement_id = $this->input->get('id');
			$this->Nation_model->nation_purchase_improvement($improvement_id);
		}
		
		function buy_infrastructure()
		{
			$infrastructure_purchase = $this->input->post('buy_infrastructure');
			$cost = 10 * $infrastructure_purchase;
			$this->Nation_model->purchase_infrastructure($cost, $infrastructure_purchase);
			$this->Nation_model->calculate_citizens();
			redirect('inations/infrastructure');
		}
		
		function buy_technology()
		{
			$technology_purchase = $this->input->post('buy_technology');
			$cost = 10 * $technology_purchase;
			$this->Nation_model->purchase_technology($cost, $technology_purchase);
			redirect('inations/technology');
		}
		
		function buy_land()
		{
			$land_purchase = $this->input->post('buy_land');
			$cost = 10 * $land_purchase;
			$this->Nation_model->purchase_land($cost, $land_purchase);
			$this->Nation_model->calculate_citizens();
			redirect('inations/land');
		}
		
		function buy_soldiers()
		{
			$soldiers_purchase = $this->input->post('buy_soldiers');
			$cost = $soldiers_purchase;
			$this->Nation_model->purchase_soldiers($cost, $soldiers_purchase);
			$this->Nation_model->calculate_citizens();
			redirect('inations/soldiers');
		}
		
		function buy_tanks()
		{
			$tanks_purchase = $this->input->post('buy_tanks');
			$cost = $tanks_purchase * 2;
			$this->Nation_model->purchase_tanks($cost, $tanks_purchase);
			$this->Nation_model->calculate_citizens();
			redirect('inations/tanks');
		}
		
		function buy_planes()
		{
			$fighters_purchase = $this->input->post('buy_plane_fighter');
			$bombers_purchase = $this->input->post('buy_plane_bomber');
			$cost = ($bombers_purchase * 5) + ($fighters_purchase * 4);
			$this->Nation_model->purchase_planes($cost, $fighters_purchase, $bombers_purchase);
			$this->Nation_model->calculate_citizens();
			redirect('inations/planes');
		}
		
		function buy_wonders()
		{
			$wonders_id = $this->input->post('buy_wonders');
			$wonders_cost = $_purchase * 5;
			$this->Nation_model->purchase_wonders($wonders_cost, $wonders_id);
			$this->Nation_model->calculate_citizens();
			redirect('inations/wonders');
		}
		
		function change_colour()
		{
			
			if($this->Nation_model->check_team()) {
				$this->session->set_userdata('errormsg', 'You can only change taxes once a day.');			
			}
			
			else {
				$colour = $this->input->post('radioColour');
				$this->Nation_model->change_team_colour($colour);
			}
			
			redirect('Inations');
		}
		
		function change_tax_rate()
		{
			$tax_rate = $this->input->post('tax_rate');
			if($this->Nation_model->check_taxes()) {
				$this->session->set_userdata('errormsg', 'You can only change taxes once a day.');			
			}
			
			else {
				$this->Nation_model->change_tax_rate($tax_rate);
			}
			
			redirect('Inations');
		}
		
		function change_government()
		{
			$government = $this->input->post('radioGovernment');
			if($this->Nation_model->check_government()) {
				$this->session->set_userdata('errormsg', 'You can only change government once a day.');				
			}
			
			else {
				$this->Nation_model->change_government($government);
			}
			
			redirect('Inations');
		}
		
		function change_religion()
		{
			$religion = $this->input->post('radioReligion');
			if($this->Nation_model->check_religion()) {
				$this->session->set_flashdata('errormsg', 'You can only change religion once a day.');	
			}
			
			else {
				$this->Nation_model->change_religion($religion);
			}

			redirect('Inations');
		}
		
		function change_affiliation()
		{
			$colour = $this->input->post('allianceAffiliation');
			$this->Nation_model->change_alliance_affiliation($colour);
			redirect('Inations');
		}
		
		function change_resources()
		{
			$resource1 = $this->input->post('optionsResources');
			$resource2 = $this->input->post('optionsResourcesTwo');
			if ($resource1 == $resource2) {
				$this->session->set_flashdata('errormsg', 'You must choose two seperate resources');
			}
			elseif ($this->Nation_model->check_resources) {
				$this->session->set_flashdata('errormsg', 'You can only change resources once a day');
			}
			else {
				$this->Nation_model->change_resources($resource1, $resource2);
			}
			
			redirect('Inations');
		}
		
		/* Statistics */
		
		function alliance_statistics_select()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('alliance/statistics_select', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function alliance_statistics()
		{
			$alliance = $this->input->post('alliance');
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('alliance/statistics_alliance', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id')), 'alliance_info' => $this->Nation_model->get_alliance_info($alliance)));
			$this->load->view('assets/footer');
		}
		
		function alliance_statistics_totals_select()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('alliance/statistics_alliance_totals_select', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function alliance_statistics_totals()
		{
			$alliance = $this->input->post('alliance');
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('alliance/alliance_totals', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id')), 'alliance_stats' => $this->Nation_model->get_statistic_totals($alliance)));
			$this->load->view('assets/footer');
		}
		
		function send_foreign_aid()
		{
			$nation_reciever_id = $this->input->get('id');
			$foreign_aid->funds = $this->input->post('aid_funds');	
			$foreign_aid->tech = $this->input->post('aid_tech');	
			$foreign_aid->soldiers = $this->input->post('aid_soldiers');
			$this->Nation_model->foreign_aid($nation_reciever_id, $foreign_aid);	
		}
		
		function foreign_aid()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/foreign_aid', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id')), 'reciever_info' => $this->Nation_model->get_nation_by_id($this->input->get('id'))));
			$this->load->view('assets/footer');
		}
	}
	
/* End of file stocker.php */
/* Location: ../application/controllers */