<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook extends CI_Controller 
{

	function __construct() 
	{
		parent::__construct();
		$this->load->model('admin/Model_guestbook');
	}

	public function index()
	{
		if ($this->session->userdata('id')) {
			$data['error'] = '';
			$data['success'] = '';

			$data['guestbook'] = $this->Model_guestbook->show();
			$header['setting'] = $this->Model_guestbook->get_setting_data();


			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_guestbook', $data);
			$this->load->view('admin/view_footer');

		} else {
			redirect(base_url().'admin/view_login');
		}
	}

	public function add()
	{
		if ($this->session->userdata('id')) {
			$data['error'] = '';
			$data['success'] = '';

			$header['setting'] = $this->Model_guestbook->get_setting_data();


			if(isset($_POST['form1'])) {

				$valid = 1;

				$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
				$this->form_validation->set_rules('kontak', 'Kontak/No. Telp', 'trim|required');
				$this->form_validation->set_rules('ucapan', 'Ucapan', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				}

				if($valid == 1) 
				{

					$form_data = array(
						'nama_lengkap'	=> $_POST['nama_lengkap'],
						'sosial_media'	=> $_POST['sosial_media'],
						'kontak'	  	=> $_POST['kontak'],
						'hadir'	  		=> $_POST['hadir'],
						'ucapan'       	=> $_POST['ucapan']
					);
					$this->Model_guestbook->add($form_data);

					$data['success'] = 'Guestbook berhasil ditambahkan!';
				}

				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_guestbook_add', $data);
				$this->load->view('admin/view_footer');

			} else {
				$this->load->view('admin/view_header',$header);
				$this->load->view('admin/view_guestbook_add', $data);
				$this->load->view('admin/view_footer');

			}

		} else {
			redirect(base_url().'admin/view_login');
		}
	}

	public function edit($id)
	{
		if ($this->session->userdata('id')) {

			// If there is no service in this id, then redirect
			$tot = $this->Model_guestbook->guestbook_check($id);
			if(!$tot) {
				redirect(base_url().'admin/guestbook');
				exit;
			}

			$header['setting'] = $this->Model_guestbook->get_setting_data();
			$data['error'] = '';
			$data['success'] = '';
			$error = '';

			if(isset($_POST['form1'])) 
			{

				$valid = 1;

				$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
				$this->form_validation->set_rules('kontak', 'Kontak/No. Telp', 'trim|required');
				$this->form_validation->set_rules('ucapan', 'Ucapan', 'trim|required');

				if($this->form_validation->run() == FALSE) {
					$valid = 0;
					$data['error'] = validation_errors();
				} 

				if($valid == 1) 
				{
					// Updating Data
					$form_data = array(
						'nama_lengkap'	=> $_POST['nama_lengkap'],
						'sosial_media'	=> $_POST['sosial_media'],
						'kontak'	  	=> $_POST['kontak'],
						'hadir'	  		=> $_POST['hadir'],
						'ucapan'       	=> $_POST['ucapan']
					);
					$this->Model_guestbook->update($id,$form_data);

					$data['success'] = 'Guestbook telah berhasil diupdate';
				}

				$data['guestbook'] = $this->Model_guestbook->getData($id);

				$this->load->view('admin/header',$header);
				$this->load->view('admin/guestbook_edit', $data);
				$this->load->view('admin/footer');

			} else {
				$data['guestbook'] = $this->Model_guestbook->getData($id);

				$this->load->view('admin/header',$header);
				$this->load->view('admin/guestbook_edit', $data);
				$this->load->view('admin/footer');
			}

		} else {
			redirect(base_url().'admin/login');
		}
	}

	public function delete($id) 
	{
			$tot = $this->Model_guestbook->guestbook_check($id);
			if(!$tot) {
				redirect(base_url().'admin/guestbook');
				exit;
			}

			$this->Model_guestbook->delete($id);

			redirect(base_url().'admin/guestbook');
	}
}