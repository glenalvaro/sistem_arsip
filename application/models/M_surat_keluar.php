<?php

class M_surat_keluar extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('tb_surat_keluar');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function detail($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function jumlahSurat_keluar()
	{   
    $query = $this->db->get('tb_surat_keluar');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}	
}