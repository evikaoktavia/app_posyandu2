<?php

class Data_kegiatan extends CI_Controller{
    public function index()
    {
        $data['kegiatan'] = $this->posyandu_model->get_data('tb_kegiatan')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kegiatan', $data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_kegiatan()
    {
        $data['kegiatan'] = $this->posyandu_model->get_data('tb_kegiatan')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_kegiatan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kegiatan_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_kegiatan();
        } else{
            $id_kegiatan            =$this->input->post('id_kegiatan');
            $tanggal_kegiatan       =$this->input->post('tanggal_kegiatan');
            $gambar_pmt             =$_FILES['gambar_pmt']['name'];
            if($gambar_pmt=''){}else{
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar_pmt')){
                    echo "Gambar PMT Gagal DiUpload!";
                }else{
                    $gambar_pmt=$this->upload->data('file_name');
                }
            }

            $nama_bidan             =$this->input->post('nama_bidan');
            $data = array(
                'id_kegiatan'      => $id_kegiatan,
                'tanggal_kegiatan'    => $tanggal_kegiatan,
                'gambar_pmt'        => $gambar_pmt,
                'nama_bidan'       => $nama_bidan,
                
            );

            $this->posyandu_model->insert_data($data, 'tb_kegiatan');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Kegiatan Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kegiatan');
        }
    }

    public function update_kegiatan($id){
        $where = array('id_kegiatan' => $id);
        $data['kegiatan'] = $this->db->query("SELECT * FROM tb_kegiatan WHERE id_kegiatan='$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_kegiatan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_kegiatan_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_kegiatan();
        }else{
            $id_kegiatan            =$this->input->post('id_kegiatan');
            $tanggal_kegiatan       =$this->input->post('tanggal_kegiatan');
            $gambar_pmt             =$this->input->post('gambar_pmt');
            $nama_bidan             =$this->input->post('nama_bidan');
        
        $data = array(
            'id_kegiatan'      => $id_kegiatan,
            'tanggal_kegiatan'    => $tanggal_kegiatan,
            'gambar_pmt'        => $gambar_pmt,
            'nama_bidan'       => $nama_bidan,
        );

        $where = array(
            'id_kegiatan' => $id
        );

        $this->posyandu_model->update_data('tb_kegiatan', $data, $where);
        
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Kegiatan Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kegiatan');
    }
}

public function detail_kegiatan($id){
  $this->load->model('posyandu_model');
  $detail = $this->posyandu_model->detail_data_kegiatan($id);
  $data['detail'] = $detail;

      $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_kegiatan', $data);
        $this->load->view('templates_admin/footer');
}

    public function _rules()
    {
        $this->form_validation->set_rules('id_kegiatan', 'ID Kegiatan', 'required');
        $this->form_validation->set_rules('tanggal_kegiatan', 'Tanggal Kegiatan', 'required');
        $this->form_validation->set_rules('nama_bidan', 'Nama Bidan', 'required');
    }

    public function delete_kegiatan($id)
    {
        $where = array('id_kegiatan' => $id);
        $this->posyandu_model->delete_data($where, 'tb_kegiatan');

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Data Kegiatan Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kegiatan');
    }

    public function search()
    {
      $keyword      = $this->input->post('keyword');
      $data['kegiatan'] = $this->posyandu_model->get_keyword_kegiatan($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kegiatan', $data);
        $this->load->view('templates_admin/footer');
    }

}

?>