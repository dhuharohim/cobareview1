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

    public function tambahDataUniversitas()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "website" => $this->input->post('website', true),
        ];

        $this->db->insert('universitas', $data);
    }

    public function hapusUniversitas($id)
    {
        //$this->db->where('id', $id);
        $this->db->delete('universitas', ['id' => $id]);
    }

    // public function tambahDataKarakterMl()
    // {
    //     $data = [
    //         "nama" => $this->input->post('nama', true),
    //         "role" => $this->input->post('role', true),
    //         "ras" => $this->input->post('ras', true),
    //         "ultimate" => $this->input->post('ultimate', true)
    //     ];

    //     $this->db->insert('karakter_ml', $data);
    // }

    // public function ubahDataKarakterMl()
    // {
    //     $data = [
    //         "nama" => $this->input->post('nama', true),
    //         "role" => $this->input->post('role', true),
    //         "ras" => $this->input->post('ras', true),
    //         "ultimate" => $this->input->post('ultimate', true)
    //     ];

    //     $this->db->where('id', $this->input->post('id'));
    //     $this->db->update('karakter_ml', $data);
    // }

    // public function cariDataKarakterMl()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('nama', $keyword);
    //     $this->db->or_like('ras', $keyword);
    //     $this->db->or_like('role', $keyword);
    //     $this->db->or_like('ultimate', $keyword);
    //     return $this->db->get('karakter_ml')->result_array();
    // }
}
