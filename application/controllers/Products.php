<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()	{
    $data['title'] = 'products';
    $data['products'] = $this->queries->get_products();

		$this->load->view('templates/header');
		$this->load->view('templates/nav', $data);
		$this->load->view('products', $data);
		$this->load->view('templates/footer');
	}
  public function new_order(){
    $data['title'] = 'New Order';
    $data['products'] = $this->queries->get_products();

		$this->load->view('templates/header');
		$this->load->view('templates/nav', $data);
		$this->load->view('new_order', $data);
		$this->load->view('templates/footer');
  }

}
