<?php
class M_peminat_lowongan extends CI_Model
{
    // ... kode sebelumnya
    public function getAll()
    {
        // method untuk mendapatkan semua data
        $query = $this->db->get('peminat_lowongan');
        return $query->result();
    }
    public function findById($id)
    {
        // select * from pasien where id=$id
        $query = $this->db->get_where('peminat_lowongan', ['id' => $id]);
        return $query->row();
    }
}
