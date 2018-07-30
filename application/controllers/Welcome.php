<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
		$data['title'] = 'Dashboard';

		$this->load->view('templates/header');
		$this->load->view('templates/nav', $data);
		$this->load->view('welcome');
		$this->load->view('templates/footer');
	}

	public function login()	{
		$this->load->view('templates/header');
		$this->load->view('user_login');
		$this->load->view('templates/footer');
	}

	public function register() {
		$this->load->view('templates/header');
		$this->load->view('user_register');
		$this->load->view('templates/footer');
	}

}
