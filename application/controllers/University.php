<?php

class University extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('University_model', 'university');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Universitas';
        $data['universitas'] = $this->university->getAllUniversity();

        // if ($this->input->post('keyword')) {
        //     $data['karakter_ml'] = $this->Karakter_ml_model->cariDataKarakterMl();
        // }

        $this->load->view('templates/header', $data);
        $this->load->view('university/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Form Tambah Data Universitas';

        $this->load->view('templates/header', $data);
        $this->load->view('university/add');
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Universitas';
        $data['universitas'] = $this->university->getUniversityById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('university/detail', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->university->hapusUniversitas($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('karakter_ml');
    }

    // public function tambah()
    // {
    //     $data['judul'] = 'Form Tambah Data Karakter ML';

    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('role', 'Role', 'required');
    //     $this->form_validation->set_rules('ultimate', 'Ultimate', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('karakter_ml/tambah');
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Karakter_ml_model->tambahDataKarakterMl();
    //         $this->session->set_flashdata('flash', 'ditambahkan');
    //         redirect('karakter_ml');
    //     }
    // }

    // public function edit($id)
    // {
    //     $data['judul'] = 'Form Ubah Data Karakter ML';
    //     $data['karakter_ml'] = $this->Karakter_ml_model->getKarakterMlById($id);
    //     $data['ras'] = ['Dragon Altar', 'Northern Vale', 'Eruditio', 'Abyss', 'Western Desert'];

    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('role', 'Role', 'required');
    //     $this->form_validation->set_rules('ultimate', 'Ultimate', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('karakter_ml/edit', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Karakter_ml_model->ubahDataKarakterMl();
    //         $this->session->set_flashdata('flash', 'diubah');
    //         redirect('karakter_ml');
    //     }
    // }
}
