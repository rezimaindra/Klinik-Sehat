<?php

class Jadwal_model extends CI_model 
{
    public function getAllJadwal()
    {
        $this->db->select('hari,jam_masuk,jam_keluar,nama');
        $this->db->from('jadwal');
        $this->db->join('dokter','jadwal.id_dokter = dokter.id_dokter');
        $query = $this->db->get();
        
        return $query->result_array();
    }

    public function tambahDataJadwal()
    {
        $data = [
            "hari" => $this->input->post('hari',true),
            "jam_masuk" => $this->input->post('jam_masuk',true),
            "jam_keluar" => $this->input->post('jam_keluar',true),
            "id_dokter" => $this->input->post('id_dokter',true)
        ];
        $this->db->insert('jadwal',$data);
    }

    public function getDokterById($id)
    {
        $this->db->select('id_jadwal,id_dokter,nama,spesialis,ktp/kk,ttl,alamat,nohp,foto');
        $this->db->from('jadwal');
        $this->db->join('dokter',' dokter.id_dokter = jadwal.id_dokter');
        $this->db->where('id_jadwal', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function hapusDataJadwal($id)
    {
        $this->db->where('id_jadwal',$id);
        $this->db->delete('jadwal');
    }
}