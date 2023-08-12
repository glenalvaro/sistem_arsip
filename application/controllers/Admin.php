<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_surat_masuk');
		$this->load->model('M_surat_keluar');
		$this->load->model('M_pengguna');
		if($this->session->userdata('level') != 'admin')
		{
			redirect('auth');
		}
	}

	function index(){
		$data['title'] = 'Halaman Admin';
		$jml['total_surat_masuk'] = $this->M_surat_masuk->jumlahSurat_masuk();
		$jml['total_surat_keluar'] = $this->M_surat_keluar->jumlahSurat_keluar();
		$jml['pengguna'] = $this->M_pengguna->jumlahPengguna();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/halaman_admin', $jml);
		$this->load->view('templates/footer');
	}
}