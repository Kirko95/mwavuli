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

	public function subscribe() {

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[subscribers.email]');

		if(! $this->form_validation->run()) {
			
			$this->session->set_flashdata('error', 'There was a problem while subcribing you to our newsletter which might be cause by:- <br> 1. Invalid Email Address. <br> 2. Email address is already subscribed.');
			
			redirect('/home');
		}else {

			$this->sub->create();
			$this->session->set_flashdata('success', 'You have succesfully subsribed to our newsletter');

			redirect('/home');
		}
	}

	public function contact() {

		$config = array (
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com', //ssl://smtp.googlemail.com
			'smpt_port' => '465',
			'smtp_user' => 'it@actserv.co.ke',
			'smtp_pass' => '@ctserv!7*',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
		);
		$from = $this->input->post('email');
		$name = $this->input->post('name');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$this->load->library('email', $config);
		$this->email->from($from, $name);
		$this->email->to('your email');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_newline("\r\n");

		$mail = $this->email->send();
		// $this->email->print_debugger();
		$this->session->set_flashdata('success', 'Thank you. Your email has been received.');
			
		redirect('/contact');
	}
}
