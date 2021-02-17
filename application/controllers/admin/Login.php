<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_login');
	}

	public function index()
	{
		$data['error'] = '';
		$data['setting'] = $this->Model_login->get_setting_data();

		if(isset($_POST['form1'])) {

            // Getting the form data
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);

            // Checking the username address
			$un = $this->Model_login->check_username($username);

			if(!$un) {
				$data['error'] = 'username salah!';
				$this->load->view('admin/view_login',$data);

			} else {
                    // When username found, checking the password
				$pw = $this->Model_login->check_password($username,$password);

				if(!$pw) {

					$data['error'] = 'Password salah!';
					$this->load->view('admin/view_login',$data);

				} else {
					// When username and password both are correct
					$array = array(
						'id' => $pw['id'],
						'full_name' => $pw['full_name'],
						'username' => $pw['username']
					);

					$this->session->set_userdata($array);

					redirect(base_url().'admin/wedding');
				}
			}
		} else {
			$this->load->view('admin/view_login',$data);    
		}
	}

	function logout() {

		$this->session->sess_destroy();
		redirect(base_url());
	}
}
