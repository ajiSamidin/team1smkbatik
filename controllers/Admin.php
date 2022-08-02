<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
			$this->load->view('sidebar_admin');
			$this->load->view('content');
		$this->load->view('Fotter');
	}public function lihat_tahun(){
		$this->load->view('header');
			$this->load->view('sidebar_admin');
			$this->load->view('tahun');
		$this->load->view('Fotter');
	}public function info_admin(){
		$this->load->view('header');
			$this->load->view('sidebar_admin');
			$this->load->view('info_user');
		$this->load->view('Fotter');
	}public function tambah_user(){
		$this->load->view('header');
			$this->load->view('sidebar_admin');
			$this->load->view('tambahUser');
		$this->load->view('Fotter');
	}public function anggota(){
		$this->load->view('header');
			$this->load->view('sidebar_admin');
			$this->load->view('daftar_anggota2');
		$this->load->view('Fotter');
	}
}
