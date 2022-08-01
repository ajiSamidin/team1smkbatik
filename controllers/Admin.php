<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
			$this->load->view('sidebar_admin');
			$this->load->view('content');
		$this->load->view('Fotter');
	}public function tahun(){
		$this->load->view('header');
			$this->load->view('sidebar_admin');
			$this->load->view('tahun');
		$this->load->view('Fotter');
	}
}
