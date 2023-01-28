<?php

class Data_balita extends CI_Controller{
    public function index()
    {
        $data['balita'] = $this->posyandu_model->get_data('tb_balita')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_balita', $data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_balita()
    {
        $data['balita'] = $this->posyandu_model->get_data('tb_balita')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_balita', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_balita_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_balita();
        } else{
            $id_balita      =$this->input->post('id_balita');
            $nama_balita    =$this->input->post('nama_balita');
            $anak_ke        =$this->input->post('anak_ke');
            $bb_lahir       =$this->input->post('bb_lahir');
            $panjang_lahir  =$this->input->post('panjang_lahir');
            $nama_ortu      =$this->input->post('nama_ortu');
            $tgl_lahir      =$this->input->post('tgl_lahir');
            $jenis_kelamin  =$this->input->post('jenis_kelamin');
            $rt             =$this->input->post('rt');
            $rw             =$this->input->post('rw');
            $status         =$this->input->post('status');
        

        $data = array(
            'id_balita' => $id_balita,
            'nama_balita' => $nama_balita,
            'anak_ke' => $anak_ke,
            'bb_lahir' => $bb_lahir,
            'panjang_lahir' => $panjang_lahir,
            'nama_ortu' => $nama_ortu,
            'tgl_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'rt' => $rt,
            'rw' => $rw,
            'status' => $status
        );

            $this->posyandu_model->insert_data($data, 'tb_balita');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Balita Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_balita');
        }
    }

    public function update_balita($id){
        $where = array('id_balita' => $id);
        $data['balita'] = $this->db->query("SELECT * FROM tb_balita WHERE id_balita='$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_balita', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_balita_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_balita();
        }else{

            $id_balita      =$this->input->post('id_balita');
            $nama_balita    =$this->input->post('nama_balita');
            $anak_ke        =$this->input->post('anak_ke');
            $bb_lahir       =$this->input->post('bb_lahir');
            $panjang_lahir  =$this->input->post('panjang_lahir');
            $nama_ortu      =$this->input->post('nama_ortu');
            $tgl_lahir      =$this->input->post('tgl_lahir');
            $jenis_kelamin  =$this->input->post('jenis_kelamin');
            $rt             =$this->input->post('rt');
            $rw             =$this->input->post('rw');
            $status         =$this->input->post('status');
        

        $data = array(
            'id_balita'     => $id_balita,
            'nama_balita'   => $nama_balita,
            'anak_ke'       => $anak_ke,
            'bb_lahir'      => $bb_lahir,
            'panjang_lahir' => $panjang_lahir,
            'nama_ortu'     => $nama_ortu,
            'tgl_lahir'     => $tgl_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'rt'            => $rt,
            'rw'            => $rw,
            'status'        => $status
        );

        $where = array(
            'id_balita' => $id
        );

        $this->posyandu_model->update_data('tb_balita', $data, $where);
        
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Balita Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_balita');
    }
}

public function detail_balita($id){
  $this->load->model('posyandu_model');
  $detail = $this->posyandu_model->detail_data($id);
  $data['detail'] = $detail;

      $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_balita', $data);
        $this->load->view('templates_admin/footer');

}

    public function _rules()
    {
        $this->form_validation->set_rules('id_balita', 'ID Balita', 'required');
        $this->form_validation->set_rules('nama_balita', 'Nama Balita', 'required');
        $this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required');
        $this->form_validation->set_rules('bb_lahir', 'BB Lahir', 'required');
        $this->form_validation->set_rules('panjang_lahir', 'Panjang Lahir', 'required');
        $this->form_validation->set_rules('nama_ortu', 'Nama Ortu', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('rt', 'RT', 'required');
        $this->form_validation->set_rules('rw', 'RW', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
    }

    public function delete_balita($id)
    {
        $where = array('id_balita' => $id);
        $this->posyandu_model->delete_data($where, 'tb_balita');

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Data Balita Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_balita');
    }

    public function search()
    {
      $keyword      = $this->input->post('keyword');
      $data['balita'] = $this->posyandu_model->get_keyword($keyword);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_balita', $data);
        $this->load->view('templates_admin/footer');
    }

}

?>