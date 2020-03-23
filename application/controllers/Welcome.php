<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
	}
	public function index()
	{
		$data = array(
			'title' => 'Sistem Informasi Akademik - STIKES Cahaya Bangsa', 
		);
		$this->load->view('main-portal', $data);	
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */