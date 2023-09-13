<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    var $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduk', 'mProduk');
        $this->load->model('Mukuran', 'mUkuran');
        $this->load->model('Mkategori', 'mKategori');
        $this->data['session'] = $this->session->userdata('username');
    }
    public function index()
  {
    $data=$this->data;
    $data['produk']=$this->mProduk->get_data();
    $data['page'] = 'pemesanan/pemesanan';
    $this->load->view('layout/base', $data);
        
    }
    public function tambah()
    {
        $data=$this->data;
        $data['ukuran'] = $this->mUkuran->get_data();
        $data['kategori'] = $this->mKategori->get_data();
        $data['page'] = 'admin/produk/tambahProduk';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        if ($this->mProduk->tambah_data($post)) {
            redirect('produk');
        } else {
            // redirect('buku/tambah');
        }
    }
    
    public function edit($id)
    {
        $data=$this->data;
        $data['ukuran'] = $this->mUkuran->get_data();
        $data['kategori'] = $this->mKategori->get_data();
        $data['produk'] = $this->mProduk->get_data_by_id($id);
        $data['page'] = 'admin/produk/editProduk';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
       
        if ($this->mProduk->edit_data($post, $id)) {
            redirect('produk');
        } else {
            // redirect('buku/tambah');
        }
    }

    public function prosesHapus($id)
    {
        $this->mProduk->hapus_data($id);
        redirect('produk');
    }
}
