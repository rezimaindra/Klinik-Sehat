<?php

class Dokter_model extends CI_model 
{
    public function getAllDokter()
    {
        return $this->db->get('dokter')->result_array();
    }

    public function tambahDataDokter($foto)
    {
        $data = [
            'id_dokter' => $this->input->post('id_dokter',true),
            'nama' => $this->input->post('nama',true),
            'spesialis' => $this->input->post('spesialis',true),
            'ktp/kk' =>$this->input->post('ktp/kk',true),

            'ttl' => $this->input->post('ttl',true),
            'alamat' => $this->input->post('alamat',true),
            'nohp' => $this->input->post('nohp',true),
            'foto' => $foto
        ];
        $this->db->insert('dokter',$data);
    }

    public function hapusDataDokter($id)
    {
        $this->db->where('id_dokter',$id);
        $this->db->delete('dokter');
    }

    public function getDokterById($id)
    {
        return $this->db->get_where('dokter',['id_dokter' => $id])->row_array();
    }

    public function ubahDataDokter($id,$foto){
        $data = [
            'nama' => $this->input->post('nama',true),
            'spesialis' => $this->input->post('spesialis',true),
            'ktp/kk' =>$this->input->post('ktp/kk',true),

            'ttl' => $this->input->post('ttl',true),
            'alamat' => $this->input->post('alamat',true),
            'nohp' => $this->input->post('nohp',true),
            'foto' => $foto
        ];

        $this->db->where('id_dokter',$id);
        $this->db->update('dokter',$data);
    }

    public function cariDataDokter()
    {
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('id_dokter',$keyword);
        $this->db->or_like('spesialis',$keyword);
        return $this->db->get('dokter')->result_array();
    }

}