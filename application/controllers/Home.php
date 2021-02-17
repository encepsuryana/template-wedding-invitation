<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_home');
	}
	
	public function index()
	{
		$header['error'] = '';
		$header['success'] = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
			$this->form_validation->set_rules('ucapan', 'Ucapan', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
				$header['error'] = validation_errors();
			}

			if($valid == 1) 
			{

				$form_data = array(
					'nama_lengkap'	=> $_POST['nama_lengkap'],
					'ucapan'       	=> $_POST['ucapan']
				);
				$this->Model_home->add($form_data);

				$header['success'] = 'Terimakasih atas semua do’a yang terpanjatkan untuk kebahagiaan dan kesempurnaan pernikahan Kami. Hanya do’a yang dapat Kami sampaikan, semoga semuanya juga bahagia';

				unset($_POST['nama_lengkap']);
				unset($_POST['ucapan']);
			}
		} 

		$header['undangan']  = $this->Model_home->get_undangan_data();
		$header['guestbook'] = $this->Model_home->get_guestbook_data();

		$this->load->view('view_home',$header);
	}
}
