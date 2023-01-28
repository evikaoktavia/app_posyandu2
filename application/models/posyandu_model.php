<?php

class Posyandu_model extends CI_model{
    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data, $table){
        $this->db->insert($table,$data);
    }

    public function update_data($table, $data, $where){
    	$this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
    	$this->db->where($where);
    	$this->db->delete($table);
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('tb_balita', array('id_balita' => $id))->row();
        return $query;
    }

    public function detail_data_kader($id = NULL){
        $query = $this->db->get_where('tb_kader', array('id_kader' => $id))->row();
        return $query;
    }

    public function detail_data_bidan($id = NULL){
        $query = $this->db->get_where('tb_bidan', array('id_bidan' => $id))->row();
        return $query;
    }

    public function detail_data_kegiatan($id = NULL){
        $query = $this->db->get_where('tb_kegiatan', array('id_kegiatan' => $id))->row();
        return $query;
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
        ->where('username', $username)
        ->where('password', md5($password))
        ->limit(1)
        ->get('tb_admin');

        if($result->num_rows() > 0){
            return $result->row();
        } else{
            return FALSE;
        }
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_balita');
        $this->db->like('id_balita', $keyword);
        $this->db->or_like('nama_balita', $keyword);
        $this->db->or_like('anak_ke', $keyword);
        $this->db->or_like('bb_lahir', $keyword);
        $this->db->or_like('panjang_lahir', $keyword);
        $this->db->or_like('nama_ortu', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('rt', $keyword);
        $this->db->or_like('rw', $keyword);
        $this->db->or_like('status', $keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_kader($keyword){
        $this->db->select('*');
        $this->db->from('tb_kader');
        $this->db->like('id_kader', $keyword);
        $this->db->or_like('nama_kader', $keyword);
        $this->db->or_like('usia', $keyword);
        $this->db->or_like('no_telp', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_bidan($keyword){
        $this->db->select('*');
        $this->db->from('tb_bidan');
        $this->db->like('id_bidan', $keyword);
        $this->db->or_like('nama_bidan', $keyword);
        $this->db->or_like('no_telp', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get()->result();
    }

    public function get_keyword_kegiatan($keyword){
        $this->db->select('*');
        $this->db->from('tb_kegiatan');
        $this->db->like('id_kegiatan', $keyword);
        $this->db->or_like('tanggal_kegiatan', $keyword);
        $this->db->or_like('gambar_pmt', $keyword);
        $this->db->or_like('nama_bidan', $keyword);
        return $this->db->get()->result();
    }

    
    function search_id($id){
        $this->db->like('tb_balita', $id , 'both');
        $this->db->order_by('nama_balita', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tb_balita')->result();
    }


}

?>