<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Services';
		$this->load->view('templates/header', $data);
		$this->load->view('page/services');
		$this->load->view('templates/footer');
	}
}
