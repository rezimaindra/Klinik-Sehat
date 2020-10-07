<?php

class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Obat';
        $data['obat'] = $this->Obat_model->getAllObat();

        if($this->input->post('keyword')) {
            $data['obat'] = $this->Obat_model->cariDataObat();
        }

        $this->load->view('templates/header',$data);
        $this->load->view('obat/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Obat';

        $this->form_validation->set_rules('nama','Nama Obat','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
        $this->form_validation->set_rules('keterangan','Keterangan','required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('obat/tambah');
            $this->load->view('templates/footer');
        }else{
            $config['upload_path']          = './upload/product/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048; 
            $config['file_name']            = $_FILES['foto']['name'];
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')) {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('obat/tambah',$data);
            }else{
                $foto = $this->upload->data('file_name');
                $this->Obat_model->tambahDataObat($foto);
                $this->session->set_flashdata('flash','ditambahkan');
                redirect('obat');
            }
        }
    }

    public function hapus($id)
    {
        $this->Obat_model->hapusDataObat($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('obat');
    }

    public function detail($id)
    {
        $data['judul'] = 'Form Detail Data Obat';
        $data['obat'] = $this->Obat_model->getObatById($id);
        $this->load->view('templates/header',$data);
        $this->load->view('obat/detail',$data);
        $this->load->view('templates/footer');
    }

    public function ubah()
    {

        $data['judul'] = 'Form Ubah Data Obat';
        $id = $this->input->post('kode');

        $this->form_validation->set_rules('nama','Nama Obat','required');
        $this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
        $this->form_validation->set_rules('keterangan','Keterangan','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('obat/ubah',$data);
            $this->load->view('templates/footer');

        }else{

            $config['upload_path']          = './upload/product/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048; 
            $config['file_name']            = $_FILES['foto']['name'];
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('foto')) {
                $data['error'] = $this->upload->display_errors();
                $this->load->view('obat/tambah',$data);

            }else{

                $foto = $this->upload->data('file_name');
                $this->Obat_model->ubahDataObat($id,$foto);
                $this->session->set_flashdata('flash','ditambahkan');
                redirect('obat');
            }
        }
    }

    public function editData($id)
    {
        $data['obat'] = $this->Obat_model->getObatById($id);

        $this->load->view('templates/header',$data);
        $this->load->view('obat/ubah',$data);
        $this->load->view('templates/footer');
    }
}