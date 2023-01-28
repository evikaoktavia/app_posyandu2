<?php

class Data_pemeriksaan_balita extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('posyandu_model');
}


    public function index()
    {
        $data['pemeriksaanb'] = $this->posyandu_model->get_data('tb_pemeriksaanbalita')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_pemeriksaan_balita', $data);
        $this->load->view('templates_admin/footer');

    }

    public function tambah_pemeriksaanb()
    {
        $data['pemeriksaanb'] = $this->posyandu_model->get_data('tb_pemeriksaanbalita')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_pemeriksaanb', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_pemeriksaanb_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE){
            $this->tambah_pemeriksaanb();
        } else{
            $id_periksab          =$this->input->post('id_periksab');
            $id_balita            =$this->input->post('id_balita');
            $nama_balita          =$this->input->post('nama_balita');
            $tanggal_pemeriksaan  =$this->input->post('tanggal_pemeriksaan');
            $berat_badan          =$this->input->post('berat_badan');
            $tinggi_badan         =$this->input->post('tinggi_badan');
            $imunisasi            =$this->input->post('imunisasi');
            $vit_a                =$this->input->post('vit_a');
            $asi_eksklusif        =$this->input->post('asi_eksklusif');
            $nama_bidan           =$this->input->post('nama_bidan');
          
        $data = array(
          'id_periksab'       => $id_periksab,
            'id_balita'       => $id_balita,
            'nama_balita'     => $nama_balita,
            'tanggal_pemeriksaan'         => $tanggal_pemeriksaan,
            'berat_badan'        => $berat_badan,
            'tinggi_badan'   => $tinggi_badan,
            'imunisasi'       => $imunisasi,
            'vit_a'       => $vit_a,
            'asi_eksklusif'   => $asi_eksklusif,
            'nama_bidan'              => $nama_bidan,
        );

            $this->posyandu_model->insert_data($data, 'tb_pemeriksaanbalita');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Pemeriksaan Balita Berhasil Ditambahkan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_pemeriksaan_alita');
        }
    }

    public function update_pemeriksaanb($id){
        $where = array('id_periksab' => $id);
        $data['pemeriksaanb'] = $this->db->query("SELECT * FROM tb_pemeriksaanbalita WHERE id_periksab='$id'")->result();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_pemeriksaan_balita', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_pemeriksaanb_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_pemeriksaanb();
        }else{
          $id_periksab          =$this->input->post('id_periksab');
          $id_balita            =$this->input->post('id_balita');
          $nama_balita          =$this->input->post('nama_balita');
          $tanggal_pemeriksaan  =$this->input->post('tanggal_pemeriksaan');
          $berat_badan          =$this->input->post('berat_badan');
          $tinggi_badan         =$this->input->post('tinggi_badan');
          $imunisasi            =$this->input->post('imunisasi');
          $vit_a                =$this->input->post('vit_a');
          $asi_eksklusif        =$this->input->post('asi_eksklusif');
          $nama_bidan           =$this->input->post('nama_bidan');
        

        $data = array(
          'id_periksab'         => $id_periksab,
          'id_balita'           => $id_balita,
          'nama_balita'         => $nama_balita,
          'tanggal_pemeriksaan'         => $tanggal_pemeriksaan,
          'berat_badan'         => $berat_badan,
          'tinggi_badan'        => $tinggi_badan,
          'imunisasi'           => $imunisasi,
          'vit_a'               => $vit_a,
          'asi_eksklusif'       => $asi_eksklusif,
          'nama_bidan'              => $nama_bidan,
      );

        $where = array(
            'id_periksab' => $id
        );

        $this->posyandu_model->update_data('tb_pemeriksaanbalita', $data, $where);
        
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Pemeriksaan Balita Berhasil Diupdate!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_pemeriksaan_balita');
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


    function get_autocomplete(){
      if (isset($_GET['term'])) {
          $result = $this->posyandu_model->search_id($_GET['term']);
          if (count($result) > 0) {
          foreach ($result as $row)
              $arr_result[] = $row->nama_balita;
              echo json_encode($arr_result);
          }
      }
    }
  }

?>