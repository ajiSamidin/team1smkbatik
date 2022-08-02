<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

	public function cek_login() {
		$this->load->library('session');
		$this->db->where('username', $_POST['nama']);
		$this->db->where('password', $_POST['sandi']);
		$query = $this->db->get('user')->result_array();
		// $nama = $query[0]['name']; DATA MASUK

		if (count($query) > 0) {
			$newdata = array(
		        'username'  => $_POST['nama'],
		        'level'     => $query[0]['level'],
		        'logged_in' => TRUE
			);
			
			$this->session->set_userdata($newdata);
			$this->session->set_userdata($nama);
			if ($newdata['level'] == 'calon') {
				redirect('/calon');
			}
			if ($newdata['level'] == 'admin') {
				redirect('/admin');
			}
		}
		redirect('/');
	}
}
