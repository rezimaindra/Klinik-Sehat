<?php

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->library('form_validation');
    }

    public function index()
        {
            $data['judul'] = 'Data Jadwal Dokter';
            $data['jadwal'] = $this->Jadwal_model->getAllJadwal();   
            
            $this->load->view('templates/header',$data);
            $this->load->view('dokter/jadwal',$data);
            $this->load->view('templates/footer');
        }
    
    public function tambah()
    {
        $data['judul'] = 'Tambah Data Jadwal';
        
        $this->form_validation->set_rules('hari','Hari','required');
        $this->form_validation->set_rules('jam_masuk','Jam Masuk','required');
        $this->form_validation->set_rules('jam_keluar','Jam Keluar','required');
        $this->form_validation->set_rules('id_dokter','ID Dokter','required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('dokter/tambah_jadwal',$data);
            $this->load->view('templates/footer');
        }else{
            $this->Jadwal_model->tambahDataJadwal();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('jadwal');
        }
        
    }

    public function hapus($id)
    {
        $this->Jadwal_model->hapusDataJadwal($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('jadwal');
    }

    public function detailDokter($id)
    {
        $data['judul'] = 'Detail Data Dokter';
        $data['jadwal'] = $this->Jadwal_model->getDokterById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('dokter/detailJadwalDokter',$data);
        $this->load->view('templates/footer');
    }
    
}