<?php

	class User_model extends CI_Model 
	{

		var $username = "";
		var $password = "";
		var $hashedpassword = "";
		
		function __construct()
		{
				//Call the Model constructor
				parent::__construct();
				$this->load->helper('security');
		}

		public function check_password($entryusername, $entrypassword) 
		{	
			$hashed_password = do_hash($entrypassword);
						
			if ($this->db->get_where('users', array('username' => $entryusername, 'password' => $hashed_password))->num_rows() == 1)
				{
					$user_id = $this->db->get_where('users', array('username' => $entryusername, 'password' => $hashed_password))->row()->id;
					$nation_id = $this->db->get_where('users', array('username' => $entryusername, 'password' => $hashed_password))->row()->nation_id;
					
					$this->session->set_userdata('user_id', $user_id);
					$this->session->set_userdata('nation_id', $nation_id);
					
					$last_visit = date("Y-m-d");
					
					$data = array('last_visit' => $last_visit);
					$this->db->where('username', $entryusername);
					$this->db->update('users', $data);
					
					return TRUE;
				}
			else
				{
					
					return FALSE;
				} 
						
		}

		function add_user($username, $password, $nation_name) 
		{
			$resource = 0;
			$resource2 = 0;
			while ($resource == $resource2) {
				$resource = rand ( 0 , 15 );
				$resource2 = rand ( 0, 15);
			}
			
			switch ($resource) 
				{
					case 1 : $resourceone = "Coal"; break;
					case 2 : $resourceone = "Pigs"; break;
					case 3 : $resourceone = "Iron"; break;
					case 4 : $resourceone = "Uranium"; break;
					case 5 : $resourceone = "Water"; break;
					case 6 : $resourceone = "Sugar"; break;
					case 7 : $resourceone = "Gold"; break;
					case 8 : $resourceone = "Silver"; break;
					case 9 : $resourceone = "Lead"; break;
					case 10 : $resourceone = "Lumber"; break;
					case 11 : $resourceone = "Aluminium"; break;
					case 12 : $resourceone = "Cattle"; break;
					case 13 : $resourceone = "Rubber"; break;
					case 14 : $resourceone = "Spices"; break;
					case 15 : $resourceone = "Marble"; break;
					case 16 : $resourceone = "Fish"; break;
				}
			switch ($resource2)
				{
					case 1 : $resourcetwo = "Coal"; break;
					case 2 : $resourcetwo = "Pigs"; break;
					case 3 : $resourcetwo = "Iron"; break;
					case 4 : $resourcetwo = "Uranium"; break;
					case 5 : $resourcetwo = "Water"; break;
					case 6 : $resourcetwo = "Sugar"; break;
					case 7 : $resourcetwo = "Gold"; break;
					case 8 : $resourcetwo = "Silver"; break;
					case 9 : $resourcetwo = "Lead"; break;
					case 10 : $resourcetwo = "Lumber"; break;
					case 11 : $resourcetwo = "Aluminium"; break;
					case 12 : $resourcetwo = "Cattle"; break;
					case 13 : $resourcetwo = "Rubber"; break;
					case 14 : $resourcetwo = "Spices"; break;
					case 15 : $resourcetwo = "Marble"; break;
					case 16 : $resourcetwo = "Fish"; break;
				}
			 
			$this->db->insert('nation_info', array('nation_name' => $nation_name, 'nation_ruler' => $username, 'nation_team_colour' => 'None', 'nation_alliance_affiliation' => 'None', 'nation_infrastructure' => 1, 'nation_technology' => 1, 'nation_land' => 1, 'nation_religion' => 'None', 'nation_government' => 'Democracy', 'nation_funds' => 10000, 'nation_soldiers' => 1, 'nation_tax_rate' => 10, 'nation_nuclear_weapons' => 0, 'nation_tanks' => 0, 'nation_average_income' => 100, 'nation_citizens' => 1, 'nation_citizens_density' => 1, 'nation_collected_taxes' => 0, 'nation_paid_bills' => 0, 'nation_developed_nuclear_weapon' => 0, 'nation_planes' => 0, 'nation_resource_one' => $resourceone, 'nation_resource_two' => $resourcetwo));
			$id = $this->db->get_where('nation_info', array('nation_name' => $nation_name, 'nation_ruler' => $username))->row()->id;
			$this->db->insert('users', array('username' => $username, 'password' => do_hash($password), 'nation_id' => $id));
			redirect('Login');
		}
		
		function get_user_by_id($id)
		{
			return $this->db->get_where('users', array('id' => $id))->row();
		}
		
		function get_user_info()
		{
		$this->db->select('id, username, last_visit');
		return $this->db->get('users');
		}
		
		function logged_in()
		{
			if ($this->session->userdata('user_id') != "")
				{
					return TRUE;
				}
			else
				{
					return FALSE;
				}
		}		
	}
	
/* End of file user_model.php */
/* Location: ../application/models */