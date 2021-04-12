<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Home';

        $this->load->view('layout/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('layout/footer');
    }
}
