<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function view($page = 'home') {

		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			
			show_404();
		}

		$data['title'] = ucfirst($page);
		$this->load->view('layout/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('layout/footer', $data);
	}
}
