<?php
class M_sektor_usaha extends CI_Model
{
    // ... kode sebelumnya
    public function getAll()
    {
        // method untuk mendapatkan semua data
        $query = $this->db->get('sektor_usaha');
        return $query->result();
    }
    public function findById($id)
    {
        // select * from pasien where id=$id
        $query = $this->db->get_where('sektor_usaha', ['id' => $id]);
        return $query->row();
    }
}
