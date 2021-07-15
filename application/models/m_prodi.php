<?php
class M_prodi extends CI_Model
{
    // ... kode sebelumnya
    public function getAll()
    {
        // method untuk mendapatkan semua data
        $query = $this->db->get('prodi');
        return $query->result();
    }
    public function findById($id)
    {
        // select * from pasien where id=$id
        $query = $this->db->get_where('prodi', ['id' => $id]);
        return $query->row();
    }
}
