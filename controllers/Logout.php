<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	
	public function keluar()
	{
		$this->load->view('logout');
	}
}