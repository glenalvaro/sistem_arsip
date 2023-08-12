<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_surat_masuk');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Halaman Surat Masuk';
		$d['surat_masuk'] = $this->M_surat_masuk->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('surat_masuk/list',$d);
		$this->load->view('templates/footer');
	}
	function tambah(){
		$data['title'] = 'Tambah Surat Masuk';
		$this->load->view('templates/header', $data);
		$this->load->view('surat_masuk/add');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function tambah_aksi(){
		$nama_surat = $this->input->post('nama_surat');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$pengirim = $this->input->post('pengirim');
		$no_surat = $this->input->post('no_surat');
		$tgl_surat = $this->input->post('tgl_surat');
		$kepada = $this->input->post('kepada');
		$perihal = $this->input->post('perihal');
		$file = $_FILES['file'];
		if ($file=''){}else{
				$config['upload_path']		='./upload/surat_masuk';
				$config['allowed_types']	='pdf|docx|jpg|png';
				$config['max_size']         = 5000;

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('file')){
					echo "Upload Gagal";
				}else{
					$file=$this->upload->data('file_name');
				}
		}

 
		$data = array(
			'nama_surat' => $nama_surat,
			'tgl_masuk' => $tgl_masuk,
			'pengirim' => $pengirim,
			'no_surat' => $no_surat,
			'tgl_surat' => $tgl_surat,
			'kepada' => $kepada,
			'perihal' => $perihal,
			'file' => $file
			);


		$this->M_surat_masuk->input_data($data,'tb_surat_masuk');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambahkan.
											</div>'
										);
		redirect('surat_masuk');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->M_surat_masuk->hapus_data($where,'tb_surat_masuk');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('surat_masuk');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$d['user'] = $this->M_surat_masuk->edit_data($where,'tb_surat_masuk')->result();
		$data['title'] = 'Edit Surat Masuk';
		$this->load->view('templates/header', $data);
		$this->load->view('surat_masuk/edit',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update(){
		$id = $this->input->post('id');
		$nama_surat = $this->input->post('nama_surat');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$pengirim = $this->input->post('pengirim');
		$no_surat = $this->input->post('no_surat');
		$tgl_surat = $this->input->post('tgl_surat');
		$kepada = $this->input->post('kepada');
		$perihal = $this->input->post('perihal');
		$file = $_FILES['file'];
		if ($file=''){}else{
				$config['upload_path']		='./upload/surat_masuk';
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
			'tgl_masuk' => $tgl_masuk,
			'pengirim' => $pengirim,
			'no_surat' => $no_surat,
			'tgl_surat' => $tgl_surat,
			'kepada' => $kepada,
			'perihal' => $perihal,
			'file' => $file
			);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_surat_masuk->update_data($where,$data,'tb_surat_masuk');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('surat_masuk');
}

	function detail($id){
		$where = array('id' => $id);
		$d['detail'] = $this->M_surat_masuk->detail($where,'tb_surat_masuk')->result();
		$data['title'] = 'Detail Surat Masuk';
		$this->load->view('templates/header', $data);
		$this->load->view('surat_masuk/detail',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
}
}