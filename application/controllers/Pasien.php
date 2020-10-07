<?php

class Pasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pasien';
        $data['pasien'] = $this->Pasien_model->getAllPasien();

        if($this->input->post('keyword')) {
            $data['pasien'] = $this->Pasien_model->cariDataPasien();
        }

        $this->load->view('templates/header',$data);
        $this->load->view('pasien/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pasien';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('ktp','KTP','required|numeric');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('ttl','TTL','required');

        $this->form_validation->set_rules('nohp','Nohp','required|numeric');
        $this->form_validation->set_rules('sosmed','Sosmed','required');
        $this->form_validation->set_rules('tinggi','Tinggi','required|numeric');
        $this->form_validation->set_rules('berat','Berat','required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('pasien/tambah');
            $this->load->view('templates/footer');
        }else{
            $this->Pasien_model->tambahDataPasien();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('pasien');

        }
    }

    public function hapus($id)
    {
        $this->Pasien_model->hapusDataPasien($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('pasien');
    }

    public function detail($id)
    {
        $data['judul'] = 'Form Detail Data Pasien';
        $data['pasien'] = $this->Pasien_model->getPasienById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('pasien/detail',$data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pasien';
        $data['pasien'] = $this->Pasien_model->getPasienById($id);
        
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('ktp','KTP','required|numeric');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('ttl','TTL','required');

        $this->form_validation->set_rules('nohp','Nohp','required|numeric');
        $this->form_validation->set_rules('sosmed','Sosmed','required');
        $this->form_validation->set_rules('tinggi','Tinggi','required|numeric');
        $this->form_validation->set_rules('berat','Berat','required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('pasien/ubah',$data);
            $this->load->view('templates/footer');
        }else{
            $this->Pasien_model->ubahDataPasien();
            $this->session->set_flashdata('flash','Diubah');
            redirect('pasien');
        }
    }
}