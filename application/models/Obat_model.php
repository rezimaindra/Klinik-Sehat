<?php

class Obat_model extends CI_model 
{
    public function getAllObat()
    {
        return $this->db->get('obat')->result_array();
    }

    public function tambahDataObat($foto)
    {
        $data = [
            'nama' => $this->input->post('nama',true),
            'keterangan' => $this->input->post('keterangan',true),
            'jumlah' => $this->input->post('jumlah',true),
            'foto' => $foto
        ];

        $this->db->insert('obat',$data);
    }

    public function hapusDataObat($id)
    {
        $this->db->where('kode',$id);
        $this->db->delete('obat');
    }

    public function getObatById($id)
    {
        return $this->db->get_where('obat',['kode' => $id])->row_array();
    }

    public function ubahDataObat($id,$foto){
        $data = [
            'kode' => $id,
            'nama' => $this->input->post('nama',true),
            'keterangan' => $this->input->post('keterangan',true),
            'jumlah' => $this->input->post('jumlah',true),
            'foto' => $foto
        ];
    
        $this->db->where('kode',$id);
        $this->db->update('obat',$data);
    }

    public function cariDataObat()
    {
        $keyword = $this->input->post('keyword',true);
        $this->db->like('kode',$keyword);
        $this->db->or_like('nama',$keyword);
        return $this->db->get('obat')->result_array();
    }
}
