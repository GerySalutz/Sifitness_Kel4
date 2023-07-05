<?php 

class Front extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header', );
        $this->load->view('templates/sidebar', );
        $this->load->view('templates/topbar', );
        $this->load->view('front/index', );
        $this->load->view('templates/footer');
  }
}
?> 