<?php

class Data_bidan extends CI_Controller{
    public function index()
    {
        $data['bidan'] = $this->posyandu_model->get_data('tb_bidan')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_bidan', $data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_bidan()
    {
        $data['bidan'] = $this->posyandu_model->get_data('tb_bidan')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_bidan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_bidan_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_bidan();
        } else{
            $id_bidan      =$this->input->post('id_bidan');
            $nama_bidan    =$this->input->post('nama_bidan');
            $alamat        =$this->input->post('alamat');
            $no_telp       =$this->input->post('no_telp');
           
        $data = array(
            'id_bidan'      => $id_bidan,
            'nama_bidan'    => $nama_bidan,
            'alamat'        => $alamat,
            'no_telp'       => $no_telp,
            
        );

            $this->posyandu_model->insert_data($data, 'tb_bidan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Bidan Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_bidan');
        }
    }

    public function update_bidan($id){
        $where = array('id_bidan' => $id);
        $data['bidan'] = $this->db->query("SELECT * FROM tb_bidan WHERE id_bidan='$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_bidan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_bidan_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_bidan();
        }else{
            $id_bidan      =$this->input->post('id_bidan');
            $nama_bidan    =$this->input->post('nama_bidan');
            $alamat        =$this->input->post('alamat');
            $no_telp       =$this->input->post('no_telp');
        
        $data = array(
            'id_bidan'      => $id_bidan,
            'nama_bidan'    => $nama_bidan,
            'alamat'        => $alamat,
            'no_telp'       => $no_telp,
        );

        $where = array(
            'id_bidan' => $id
        );

        $this->posyandu_model->update_data('tb_bidan', $data, $where);
        
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Balita Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_bidan');
    }
}

public function detail_bidan($id){
  $this->load->model('posyandu_model');
  $detail = $this->posyandu_model->detail_data_bidan($id);
  $data['detail'] = $detail;

      $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_bidan', $data);
        $this->load->view('templates_admin/footer');

}

    public function _rules()
    {
        $this->form_validation->set_rules('id_bidan', 'ID Balita', 'required');
        $this->form_validation->set_rules('nama_bidan', 'Nama Bidan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
    }

    public function delete_bidan($id)
    {
        $where = array('id_bidan' => $id);
        $this->posyandu_model->delete_data($where, 'tb_bidan');

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Data Bidan Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_bidan');
    }

    public function search()
    {
      $keyword      = $this->input->post('keyword');
      $data['bidan'] = $this->posyandu_model->get_keyword_bidan($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_bidan', $data);
        $this->load->view('templates_admin/footer');
    }

}

?>