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
			$this->db->insert('nation_info', array('nation_name' => $nation_name, 'nation_ruler' => $username, 'nation_team_colour' => 'None', 'nation_alliance_affiliation' => 'None', 'nation_infrastructure' => 1, 'nation_technology' => 1, 'nation_land' => 1, 'nation_religion' => 'None', 'nation_government' => 'Democracy', 'nation_funds' => 10000, 'nation_soldiers' => 1, 'nation_tax_rate' => 10, 'nation_nuclear_weapons' => 0, 'nation_tanks' => 0, 'nation_average_income' => 100, 'nation_citizens' => 1, 'nation_citizens_density' => 1));
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