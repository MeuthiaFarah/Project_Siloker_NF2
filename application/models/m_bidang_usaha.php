<?php
class M_bidang_usaha extends CI_Model
{
    // ... kode sebelumnya
    public function getAll()
    {
        // method untuk mendapatkan semua data
        $query = $this->db->get('bidang_usaha');
        return $query->result();
    }
    public function findById($id)
    {
        // select * from pasien where id=$id
        $query = $this->db->get_where('bidang_usaha', ['id' => $id]);
        return $query->row();
    }
}
