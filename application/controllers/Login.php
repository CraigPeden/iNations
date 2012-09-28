<?php

	Class Login extends CI_Controller 
	{
		
		function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->session->keep_flashdata('current_url');
			$this->load->view('assets/header');
			$this->load->view('auth/login');
			$this->load->view('assets/footer');
		}
		
		public function sign_up()
		{
			$this->load->view('assets/header');
			$this->load->view('auth/sign_up');
			$this->load->view('assets/footer');
		}
		
		function add_user()
		{
			$username=$this->input->post('newuser');
			$password=$this->input->post('newpass');
			$nation_name=$this->input->post('newnation');
			$password_check=$this->input->post('newpasscheck');
			
			if ($password == $password_check)
			{
				$this->session->set_flashdata('success', 'User Created, you can now log in.');
				$this->User_model->add_user($username,$password,$nation_name);
				redirect('Login');
			}
			else
			{
				$this->session->set_flashdata('errormsg', 'Entered passwords do not match');
				redirect('Login/sign_up');
			}
			
			
		}
	
		public function checkpassword() 
		{
			
			$entryusername = $this->input->post('username');
			$entrypassword = $this->input->post('password');
			
			if ($this->User_model->check_password($entryusername, $entrypassword)) 
			{
				
				redirect($this->session->flashdata('current_url'));
			} 
			else 
			{	
				$this->session->set_flashdata('loginfail', 'TRUE');
				$this->session->set_flashdata('username', $entryusername);
				redirect('Login');
			}
			
		}
		
		function logout()
		{
			$this->session->unset_userdata('user_id');
			$this->session->set_flashdata('logout', 'TRUE');
			redirect('Login');
		}
		
	}
	
/* End of file Login.php */
/* Location: ../application/controllers */