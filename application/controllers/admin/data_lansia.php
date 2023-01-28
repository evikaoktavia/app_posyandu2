<?php

class Data_lansia extends CI_Controller{
    public function index()
    {
        $data['lansia'] = $this->posyandu_model->get_data('tb_lansia')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_lansia', $data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_lansia()
    {
        $data['lansia'] = $this->posyandu_model->get_data('tb_lansia')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_lansia', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_lansia_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_lansia();
        } else{
          $id_lansia          =$this->input->post('id_lansia');
          $nama_lansia        =$this->input->post('nama_lansia');
          $umur               =$this->input->post('umur');
          $jenis_kelamin      =$this->input->post('jenis_kelamin');
          $alamat             =$this->input->post('alamat');
          $status             =$this->input->post('status');
        

        $data = array(
          'id_lansia'       => $id_lansia,
          'nama_lansia'     => $nama_lansia,
          'umur'            => $umur,
          'jenis_kelamin'   => $jenis_kelamin,
          'alamat'          => $alamat,
          'status'          => $status
        );

            $this->posyandu_model->insert_data($data, 'tb_lansia');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Lansia Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_lansia');
        }
    }

    public function update_lansia($id){
        $where = array('id_lansia' => $id);
        $data['lansia'] = $this->db->query("SELECT * FROM tb_lansia WHERE id_lansia='$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_lansia', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_lansia_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_lansia();
        }else{
            $id_lansia          =$this->input->post('id_lansia');
            $nama_lansia        =$this->input->post('nama_lansia');
            $umur               =$this->input->post('umur');
            $jenis_kelamin      =$this->input->post('jenis_kelamin');
            $alamat             =$this->input->post('alamat');
            $status             =$this->input->post('status');

        $data = array(
            'id_lansia'       => $id_lansia,
            'nama_lansia'     => $nama_lansia,
            'umur'            => $umur,
            'jenis_kelamin'   => $jenis_kelamin,
            'alamat'          => $alamat,
            'status'          => $status
        );

        $where = array(
            'id_lansia' => $id
        );

        $this->posyandu_model->update_data('tb_lansia', $data, $where);

        
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Lansia Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_lansia');
    }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_lansia', 'ID Lansia', 'required');
        $this->form_validation->set_rules('nama_lansia', 'Nama Lansia', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }

    public function delete_lansia($id)
    {
        $where = array('id_lansia' => $id);
        $this->posyandu_model->delete_data($where, 'tb_lansia');

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Data Lansia Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_lansia');
    }

    public function search()
    {
      $keyword      = $this->input->post('keyword');
      $data['lansia'] = $this->posyandu_model->get_keyword($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_lansia', $data);
        $this->load->view('templates_admin/footer');
    }

}

?>