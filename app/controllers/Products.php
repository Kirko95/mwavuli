<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('download');
	}

	public function view($page = 'index') {

		if ( ! file_exists(APPPATH.'views/products/'.$page.'.php')) {
			
			show_404();
		}

		$data['title'] = ucfirst($page);
		$this->load->view('layout/header', $data);
		$this->load->view('products/'.$page, $data);
		$this->load->view('layout/footer', $data);
	}

	public function pension($page = 'IPF') {
		
		if ( ! file_exists(APPPATH.'views/products/pension/'.$page.'.php')) {

			show_404();
		}

		$data['title'] = ucfirst($page);
		$this->load->view('layout/header', $data);
		$this->load->view('products/pension/'.$page, $data);
		$this->load->view('layout/footer', $data);
	}

	public function search() {

		$this->load->view('layout/header');
		$this->load->view('pages/search');
		$this->load->view('layout/footer');
	}
}
