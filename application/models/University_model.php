<?php

class University_model extends CI_Model
{
    public function getAllUniversity()
    {
        return $this->db->get('universitas')->result_array();
    }

    public function getUniversityById($id)
    {
        return $this->db->get_where('universitas', ['id' => $id])->row_array();
    }

    public function getUniversityBySearching()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('website', $keyword);
        return $this->db->get('universitas')->result_array();
    }

    public function tambahDataUniversitas()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "website" => $this->input->post('website', true),
            "telp" => $this->input->post('telp', true),
            "logo" => $this->_uploadImage(),
        ];

        $this->db->insert('universitas', $data);
    }

    public function ubahDataUniversitas()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "website" => $this->input->post('website', true),
            "telp" => $this->input->post('telp', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('universitas', $data);
    }

    public function hapusUniversitas($id)
    {
        //$this->db->where('id', $id);
        $this->_deleteImage($id);
        $this->db->delete('universitas', ['id' => $id]);
    }

    private function _uploadImage()
    {
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        $config['upload_path']          = './assets/img/univ_logo';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $universitas = $this->getUniversityById($id);
        if ($universitas['logo'] != "default.jpg") {
            unlink(FCPATH . 'assets/img/univ_logo/' . $universitas['logo']);
        }
    }
}
