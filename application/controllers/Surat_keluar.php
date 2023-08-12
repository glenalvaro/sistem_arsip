<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_surat_keluar');
			$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Halaman Surat Keluar';
		$d['surat_keluar'] = $this->M_surat_keluar->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('surat_keluar/list',$d);
		$this->load->view('templates/footer');
	}
	function tambah(){
		$data['title'] = 'Tambah Surat Keluar';
		$this->load->view('templates/header', $data);
		$this->load->view('surat_keluar/add');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function tambah_aksi_surat(){
		$nama_surat = $this->input->post('nama_surat');
		$tgl_keluar = $this->input->post('tgl_keluar');
		$no_surat = $this->input->post('no_surat');
		$tgl_surat = $this->input->post('tgl_surat');
		$kepada = $this->input->post('kepada');
		$perihal = $this->input->post('perihal');
		$file = $_FILES['file'];
		if ($file=''){}else{
				$config['upload_path']		='./upload/surat_keluar';
				$config['allowed_types']	='pdf|docx|jpg|png';
				$config['max_size']         = 5000;

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('file')){
					echo "Upload Gagal"; die();
				}else{
					$file=$this->upload->data('file_name');
				}
		}

 
		$data = array(
			'nama_surat' => $nama_surat,
			'tgl_keluar' => $tgl_keluar,
			'no_surat' => $no_surat,
			'tgl_surat' => $tgl_surat,
			'kepada' => $kepada,
			'perihal' => $perihal,
			'file' => $file
			);
		$this->M_surat_keluar->input_data($data,'tb_surat_keluar');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambahkan.
											</div>'
										);
		redirect('surat_keluar');
	}

	function hapus_surat($id){
		$where = array('id' => $id);
		$this->M_surat_keluar->hapus_data($where,'tb_surat_keluar');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('surat_keluar');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$d['user'] = $this->M_surat_keluar->edit_data($where,'tb_surat_keluar')->result();
		$data['title'] = 'Edit Surat Keluar';
		$this->load->view('templates/header', $data);
		$this->load->view('surat_keluar/edit',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update(){
	$id = $this->input->post('id');
	$nama_surat = $this->input->post('nama_surat');
	$no_surat = $this->input->post('no_surat');
	$tgl_surat = $this->input->post('tgl_surat');
	$perihal = $this->input->post('perihal');
	if ($file=''){}else{
				$config['upload_path']		='./upload/surat_keluar';
				$config['allowed_types']	='pdf|docx|jpg|png';
				$config['max_size']         = 5000;

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('file')){
					echo "Upload Gagal"; die();
				}else{
					$file=$this->upload->data('file_name');
				}
		}
 	
	$data = array(
		'nama_surat' => $nama_surat,
		'no_surat' => $no_surat,
		'tgl_surat' => $tgl_surat,
		'perihal' => $perihal,
		'file' => $file
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_surat_keluar->update_data($where,$data,'tb_surat_keluar');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('surat_keluar');
}

	function detail($id){
		$where = array('id' => $id);
		$d['detail'] = $this->M_surat_keluar->detail($where,'tb_surat_keluar')->result();
		$data['title'] = 'Detail Surat Keluar';
		$this->load->view('templates/header', $data);
		$this->load->view('surat_keluar/detail',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
}
}