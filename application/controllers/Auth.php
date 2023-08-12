<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();      
        $this->load->model('M_login');
    }

    function index(){
        $data['title'] = 'Halaman Login';
        $this->load->view('login', $data);
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->M_login->cek($username, md5($password));
        if($cek->num_rows() > 0)
        {
            foreach($cek->result() as $data){
                $sess_data['id'] = $data->id;
                $sess_data['nama'] = $data->nama;
                $sess_data['email'] = $data->email;
                $sess_data['username'] = $data->username;
                $sess_data['level'] = $data->level;
                $sess_data['foto'] = $data->foto;
                $this->session->set_userdata($sess_data);
            }

            if($this->session->userdata('level') == 'admin')
            {
                redirect(base_url("admin"));
            }
            elseif($this->session->userdata('level') == 'pegawai')
            {
                 redirect(base_url("pegawai"));
            }
        }
        else
        {
             $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Try it Username and password invalid</div>');
                redirect(base_url('auth'));
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}