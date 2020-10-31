<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Products';
		$this->load->view('templates/header', $data);
		$this->load->view('page/products');
		$this->load->view('templates/footer');
	}
}
