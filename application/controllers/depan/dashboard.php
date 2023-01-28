<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $this->load->view('templates_depan/header');
        $this->load->view('depan/dashboard');
        $this->load->view('templates_depan/footer');
    }
}
?>
