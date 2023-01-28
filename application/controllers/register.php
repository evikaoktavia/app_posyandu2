<?php

class Register extends CI_Controller{
    public function index()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('form_register');
            $this->load->view('templates_admin/footer');
        } else {
          
            $nama = $this->input->post('nama');
            $username   = $this->input->post('username');
            $password   = md5($this->input->post('password'));
            $role_id    = '1';

            $data = array(
                
                'nama'  => $nama,
                'username'  => $username,
                'password'  => $password,
                'role_id' => $role_id
            );

            $this->posyandu_model->insert_data($data, 'tb_admin');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Berhasil Register, Silahkan Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }
       
        public function _rules()
    {
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }
    }

?>