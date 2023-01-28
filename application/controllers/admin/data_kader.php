<?php

class Data_kader extends CI_Controller{
    public function index()
    {
        $data['kader'] = $this->posyandu_model->get_data('tb_kader')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kader', $data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_kader()
    {
        $data['kader'] = $this->posyandu_model->get_data('tb_kader')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_kader', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kader_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_kader();
        } else{
            $id_kader      =$this->input->post('id_kader');
            $nama_kader    =$this->input->post('nama_kader');
            $usia          =$this->input->post('usia');
            $no_telp       =$this->input->post('no_telp');
            $alamat        =$this->input->post('alamat');

        $data = array(
            'id_kader'    => $id_kader,
            'nama_kader'  => $nama_kader,
            'usia'        => $usia,
            'no_telp'     => $no_telp,
            'alamat'      => $alamat,
        );

            $this->posyandu_model->insert_data($data, 'tb_kader');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Kader Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kader');
        }
    }

    public function update_kader($id){
        $where = array('id_kader' => $id);
        $data['kader'] = $this->db->query("SELECT * FROM tb_kader WHERE id_kader='$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_kader', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_kader_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_kader();
        }else{
          $id_kader      =$this->input->post('id_kader');
          $nama_kader    =$this->input->post('nama_kader');
          $usia          =$this->input->post('usia');
          $no_telp       =$this->input->post('no_telp');
          $alamat        =$this->input->post('alamat');

        $data = array(
          'id_kader'    => $id_kader,
          'nama_kader'  => $nama_kader,
          'usia'        => $usia,
          'no_telp'     => $no_telp,
          'alamat'      => $alamat,
        );

        $where = array(
            'id_kader' => $id
        );

        $this->posyandu_model->update_data('tb_kader', $data, $where);
        
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Kader Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kader');
    }
}

public function detail_kader($id){
  $this->load->model('posyandu_model');
  $detail = $this->posyandu_model->detail_data_kader($id);
  $data['detail'] = $detail;

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_kader', $data);
        $this->load->view('templates_admin/footer');
}

    public function _rules()
    {
        $this->form_validation->set_rules('id_kader', 'ID Kader', 'required');
        $this->form_validation->set_rules('nama_kader', 'Nama Kader', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
     
    }

    public function delete_kader($id)
    {
        $where = array('id_kader' => $id);
        $this->posyandu_model->delete_data($where, 'tb_kader');

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Data Kader Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kader');
    }

    public function search()
    {
      $keyword      = $this->input->post('keyword');
      $data['kader'] = $this->posyandu_model->get_keyword_kader($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kader', $data);
        $this->load->view('templates_admin/footer');
    }

}

?>