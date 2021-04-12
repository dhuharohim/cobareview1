<?php

class About extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'About Me';

        $this->load->view('layout/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('layout/footer');
    }
}
