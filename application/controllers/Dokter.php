<?php

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('form_validation');
    }

    public function index()
        {
            $data['judul'] = 'Data Jadwal Dokter';
            $data['dokter'] = $this->Dokter_model->getAllDokter();  
            
            if($this->input->post('keyword')) {
                $data['dokter'] = $this->Dokter_model->cariDataDokter();
            }

            $this->load->view('templates/header',$data);
            $this->load->view('dokter/index',$data);
            $this->load->view('templates/footer');
        }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Dokter';
        
        $this->form_validation->set_rules('id_dokter','ID Dokter','required|numeric');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('spesialis','Spesialis','required');
        $this->form_validation->set_rules('ktp/kk','No KTP/KK','required|numeric');
        $this->form_validation->set_rules('ttl','Tempat Tanggal Lahir','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('nohp','No Hp','required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('dokter/tambah');
            $this->load->view('templates/footer');
        }else{
            $config['upload_path']          = './upload/product/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 2048; 
            $config['file_name']            = $_FILES['foto']['name'];
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')) {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('dokter/tambah',$data);
            }else{
                $foto = $this->upload->data('file_name');
                $this->Dokter_model->tambahDataDokter($foto);
                $this->session->set_flashdata('flash','ditambahkan');
                redirect('Dokter');
            }
                
        }
    }

    public function hapus($id)
    {
        $this->Dokter_model->hapusDataDokter($id);
        $this->session->set_flashdata('flash','dihapus');
        redirect('dokter');
    }

    public function detail($id)
    {
        $data['judul'] = 'Form Detail Data Dokter';
        $data['dokter'] = $this->Dokter_model->getDokterById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('dokter/detail',$data);
        $this->load->view('templates/footer');  
    }

    public function ubah()
    {
        $data['judul'] = 'Form Ubah Data Dokter';
        $id = $this->input->post('id_dokter');

        $this->form_validation->set_rules('id_dokter','ID Dokter','required|numeric');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('spesialis','Spesialis','required');
        $this->form_validation->set_rules('ktp/kk','No KTP/KK','required|numeric');
        $this->form_validation->set_rules('ttl','Tempat Tanggal Lahir','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('nohp','No Hp','required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('dokter/ubah',$data);
            $this->load->view('templates/footer');

        }else{

            $config['upload_path']          = './upload/product/';
            $config['allowed_types']        = 'jpeg|jpg|png|';
            $config['max_size']             = 2048; 
            $config['file_name']            = $_FILES['foto']['name'];
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')) {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('dokter/ubah',$data);

            }else{

                $foto = $this->upload->data('file_name');
                $this->Dokter_model->ubahDataDokter($id,$foto);
                $this->session->set_flashdata('flash','diubahkan');
                redirect('dokter');
            }
        }
    }

    public function editData($id)
    {
        $data['dokter'] = $this->Dokter_model->getDokterById($id);

        $this->load->view('templates/header',$data);
        $this->load->view('dokter/ubah',$data);
        $this->load->view('templates/footer');
    }
}