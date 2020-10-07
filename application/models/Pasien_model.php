<?php

class Pasien_model extends CI_model 
{
    public function getAllPasien()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function tambahDataPasien()
    {
        $data = [
            "nama" =>$this->input->post('nama',true),
            "ktp/kk" =>$this->input->post('ktp',true),
            "alamat" =>$this->input->post('alamat',true),
            "ttl" =>$this->input->post('ttl',true),

            "nohp" =>$this->input->post('nohp',true),
            "sosmed" =>$this->input->post('sosmed',true),
            "tinggi" =>$this->input->post('tinggi',true),
            "berat" =>$this->input->post('berat',true),
        ];

        $this->db->insert('pasien',$data);
    }

    public function hapusDataPasien($id)
    {
        $this->db->where('ktp/kk',$id);
        $this->db->delete('pasien');
    }

    public function getPasienById($id)
    {
        return $this->db->get_where('pasien',['ktp/kk' => $id])->row_array();
    }

    public function ubahDataPasien(){
        $data = [
            "nama" =>$this->input->post('nama',true),
            "ktp/kk" =>$this->input->post('ktp',true),
            "alamat" =>$this->input->post('alamat',true),
            "ttl" =>$this->input->post('ttl',true),
    
            "nohp" =>$this->input->post('nohp',true),
            "sosmed" =>$this->input->post('sosmed',true),
            "tinggi" =>$this->input->post('tinggi',true),
            "berat" =>$this->input->post('berat',true),
        ];
    
        $this->db->where('ktp/kk',$this->input->post('ktp'));
        $this->db->update('pasien',$data);
    }

    public function cariDataPasien()
    {
        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama',$keyword);
        $this->db->or_like('ktp/kk',$keyword);
        return $this->db->get('pasien')->result_array();
    }
}