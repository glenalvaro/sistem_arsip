<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('level') != 'pegawai')
		{
			redirect('auth');
		}
	}

	function index(){
		$data['title'] = 'Halaman Pegawai';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pegawai/halaman_pegawai');
		$this->load->view('templates/footer');
	}
}