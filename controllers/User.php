<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function cek_login() {
		// print_r($_POST);
		$this->db->where('username', $_POST['nama']);
		$this->db->where('password', $_POST['sandi']);
		$query = $this->db->get('user')->result_array();
		if (count($query) > 0) {
			$newdata = array(
		        'username'  => $_POST['nama'],
		        'level'     => $query[0]['level'],
		        'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			if ($newdata['level'] == 'calon') {
				redirect('/calon');
			}
			if ($newdata['level'] == 'admin') {
				redirect('/admin');
			}
		}
		redirect('/');
		// print_r($query);
	}
}
