<?php
class M_lowongan_keahlian extends CI_Model
{
    // ... kode sebelumnya
    public function getAll()
    {
        // method untuk mendapatkan semua data
        $query = $this->db->get('lowongan_keahlian');
        return $query->result();
    }
    public function findById($id)
    {
        // select * from pasien where id=$id
        $query = $this->db->get_where('lowongan_keahlian', ['id' => $id]);
        return $query->row();
    }
}
