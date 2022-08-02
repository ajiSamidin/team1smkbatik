<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
			$this->load->view('sidebar_calon');
			$this->load->view('content');
		$this->load->view('Fotter');
	}public function info()
	{
		$this->load->view('header');
			$this->load->view('sidebar_calon');
			$this->load->view('info_calon');
		$this->load->view('Fotter');
	}
}
