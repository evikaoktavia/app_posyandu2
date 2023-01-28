<?php

class Data_ibuhamil extends CI_Controller{
    public function index()
    {
        $data['ibuhamil'] = $this->posyandu_model->get_data('tb_ibuhamil')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_ibuhamil', $data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_ibuhamil()
    {
        $data['ibuhamil'] = $this->posyandu_model->get_data('tb_ibuhamil')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_ibuhamil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_ibuhamil_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_ibuhamil();
        } else{
            $id_ibuhamil        =$this->input->post('id_ibuhamil');
            $nama_ibuhamil      =$this->input->post('nama_ibuhamil');
            $hpht               =$this->input->post('hpht');
            $gol_darah          =$this->input->post('gol_darah');
            $pertama_datang     =$this->input->post('pertama_datang');
            $hamil_ke           =$this->input->post('hamil_ke');
            $status             =$this->input->post('status');
        

        $data = array(
            'id_ibuhamil'       => $id_ibuhamil,
            'nama_ibuhamil'     => $nama_ibuhamil,
            'hpht'              => $hpht,
            'gol_darah'        => $gol_darah,
            'pertama_datang'    => $pertama_datang,
            'hamil_ke'          => $hamil_ke,
            'status'            => $status
        );

            $this->posyandu_model->insert_data($data, 'tb_ibuhamil');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Ibu Hamil Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_ibuhamil');
        }
    }

    public function update_ibuhamil($id){
        $where = array('id_ibuhamil' => $id);
        $data['ibuhamil'] = $this->db->query("SELECT * FROM tb_ibuhamil WHERE id_ibuhamil='$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_ibuhamil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_ibuhamil_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_ibuhamil();
        }else{
            $id_ibuhamil        =$this->input->post('id_ibuhamil');
            $nama_ibuhamil      =$this->input->post('nama_ibuhamil');
            $hpht               =$this->input->post('hpht');
            $gol_darah          =$this->input->post('gol_darah');
            $pertama_datang     =$this->input->post('pertama_datang');
            $hamil_ke           =$this->input->post('hamil_ke');
            $status             =$this->input->post('status');

        $data = array(
            'id_ibuhamil'       => $id_ibuhamil,
            'nama_ibuhamil'     => $nama_ibuhamil,
            'hpht'              => $hpht,
            'gol_darah'        => $gol_darah,
            'pertama_datang'    => $pertama_datang,
            'hamil_ke'          => $hamil_ke,
            'status'            => $status
        );

        $where = array(
            'id_ibuhamil' => $id
        );

        $this->posyandu_model->update_data('tb_ibuhamil', $data, $where);

        
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Ibu Hamil Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_ibuhamil');
    }
    }

    public function delete_ibuhamil($id)
    {
        $where = array('id_ibuhamil' => $id);
        $this->posyandu_model->delete_data($where, 'tb_ibuhamil');

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Data Balita Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_ibuhamil');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_ibuhamil', 'ID Ibu Hamil', 'required');
        $this->form_validation->set_rules('nama_ibuhamil', 'Nama Ibu Hamil', 'required');
        $this->form_validation->set_rules('hpht', 'HPHT', 'required');
        $this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required');
        $this->form_validation->set_rules('pertama_datang', 'Pertama Datang', 'required');
        $this->form_validation->set_rules('hamil_ke', 'Hamil Ke', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }

    public function search()
    {
      $keyword      = $this->input->post('keyword');
      $data['ibuhamil'] = $this->posyandu_model->get_keyword($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_ibuhamil', $data);
        $this->load->view('templates_admin/footer');
    }

}

?>