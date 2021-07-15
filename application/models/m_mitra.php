<?php
class M_mitra extends CI_Model
{
    // ... kode sebelumnya
    public function getAll()
    {
        // method untuk mendapatkan semua data
        $query = $this->db->get('mitra');
        return $query->result();
    }
    public function findById($id)
    {
        // select * from pasien where id=$id
        $query = $this->db->get_where('mitra', ['id' => $id]);
        return $query->row();
    }
}
