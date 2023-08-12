<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_pengguna');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Halaman Data Pengguna';
		$d['pengguna'] = $this->M_pengguna->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pengguna/list',$d);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['title'] = 'Tambah Data Pengguna';
		$this->load->view('templates/header', $data);
		$this->load->view('pengguna/add');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$foto = $_FILES['foto'];
		if ($foto=''){
			
		}else{
				$config['upload_path']		='./upload/img';
				$config['allowed_types']	='gif|jpg|png';
				$config['max_size']         = 1000;

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('foto')){
					echo "Upload Gagal"; die();
				}else{
					$foto=$this->upload->data('file_name');
				}
		}

 
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'username' => $username,
			'pass' => $pass,
			'password' => md5($pass),
			'level' => $level,
			'foto' => $foto
			);


		$this->M_pengguna->input_data($data,'tb_user');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambahkan.
											</div>'
										);
		redirect('pengguna');
	}

	function detail($id){
		$where = array('id' => $id);
		$d['detail'] = $this->M_pengguna->detail($where,'tb_user')->result();
		$data['title'] = 'Detail Data Pengguna';
		$this->load->view('templates/header', $data);
		$this->load->view('pengguna/detail',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
}

	function edit($id){
		$where = array('id' => $id);
		$d['user'] = $this->M_pengguna->edit_data($where,'tb_user')->result();
		$data['title'] = 'Edit Data Pengguna';
		$this->load->view('templates/header', $data);
		$this->load->view('pengguna/edit',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$foto = $_FILES['foto'];
		if ($foto=''){}else{
				$config['upload_path']		='./upload/img';
				$config['allowed_types']	='gif|jpg|png';
				$config['max_size']         = 1000;

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('foto')){
					echo "Upload Gagal"; die();
				}else{
					$foto=$this->upload->data('file_name');
				}
		}

 
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'tempat_lahir' => $tempat_lahir,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'username' => $username,
			'pass' => $pass,
			'password' => md5($pass),
			'level' => $level,
			'foto' => $foto
			);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_pengguna->update_data($where,$data,'tb_user');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('pengguna');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->M_pengguna->hapus_data($where,'tb_user');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
		redirect('pengguna');
	}
}