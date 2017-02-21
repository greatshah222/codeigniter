<?php
class Login extends CI_Controller {

	public function index()
	{

		if ( $this->session->userdata('user_id') )
			return redirect('admin/dashboard');
		$this->load->helper('form');
		$this->load->view('public/admin_login');
	}


	public function admin_login()
	{
		$this->load->library('form_validation');

		//$this->form_validation->set_rules('username','User Name','required');
		//$this->form_validation->set_rules('password','Password','required');

		if( $this->form_validation->run('admin_login') )
		{
		  $username = $this->input->post('username');
		  $password = $this->input->post('password');
		  //echo "username: $username and password: $password";
		  $this->load->model('loginmodel');


		 $login_id=$this->loginmodel->login_valid($username, $password);
		 if( $login_id )
		 {
		 	$this->session->set_userdata('user_id',$login_id); 
		 	return redirect('admin/dashboard');

		 	//echo "password match";
		 	//valid 
		 }else{
		 	$this->session->set_flashdata('login_failed','sorry invalid username or password. Try Again');
		 	return redirect('login');
		 	//echo "password do not match try again";//login failed authetication
		 }
		}

 else{
	$this->load->view('public/admin_login');
	//echo validation_errors();
}
}

public function logout()
{
	$this->session->unset_userdata('user_id');
	return redirect('login');
}
}
