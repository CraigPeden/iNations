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
		
		function index()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/main', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function infrastructure()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/infrastructure', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
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
		
		function taxes()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/taxes', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function bills()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/bills', array('nation_info' => $this->Nation_model->get_nation_by_id($this->session->userdata('nation_id'))));
			$this->load->view('assets/footer');
		}
		
		function wonders()
		{
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/wonders', array('wonder_info' => $this->Nation_model->get_wonders()));
			$this->load->view('assets/footer');
		}
		
		function wonder()
		{
			$wonder_id = $this->input->get('id');
			
			$this->load->view('assets/header', array('user' => $this->User_model->get_user_by_id($this->session->userdata('user_id'))));
			$this->load->view('assets/sidebar');
			$this->load->view('nation/wonder', array('wonder_info' => $this->Nation_model->get_wonder_by_id($wonder_id)));
			$this->load->view('assets/footer');
		}
		
		function collect_taxes()
		{
			$this->Nation_model->collect_taxes();
			redirect('inations');
		}
		
		function pay_bills()
		{
			$this->Nation_model->pay_bills();
			redirect('inations');
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
			$planes_purchase = $this->input->post('buy_planes');
			$cost = $planes_purchase * 5;
			$this->Nation_model->purchase_planes($cost, $planes_purchase);
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
			$colour = $this->input->post('radioColour');
			$this->Nation_model->change_team_colour($colour);
			redirect('Inations');
		}
		
		function change_tax_rate()
		{
			$tax_rate = $this->input->post('tax_rate');
			$this->Nation_model->change_tax_rate($tax_rate);
			redirect('Inations');
		}
		
		function change_government()
		{
			$government = $this->input->post('radioGovernment');
			$this->Nation_model->change_government($government);
			redirect('Inations');
		}
		
		function change_religion()
		{
			$religion = $this->input->post('radioReligion');
			$this->Nation_model->change_religion($religion);
			redirect('Inations');
		}
		
		function change_affiliation()
		{
			$colour = $this->input->post('allianceAffiliation');
			$this->Nation_model->change_alliance_affiliation($colour);
			redirect('Inations');
		}
		
		function generate_resources()
		{
			/*switch ($page)
				{
					case "Home": echo "You selected Home";
						break;
					case "About": echo "You selected About";
						break;
					case "News": echo "You selected News";
						break;
					case "Login": echo "You selected Login"; 
						break;
					case "Links": echo "You selected Links"; 
						break;
				}*/
		}
	}
	
/* End of file stocker.php */
/* Location: ../application/controllers */