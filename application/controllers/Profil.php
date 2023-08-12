<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['title'] = 'Halaman Profil';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('profil/profil');
		$this->load->view('templates/footer');
	}
}