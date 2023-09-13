<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mkategori', 'mKategori');
        $this->load->model('Muser', 'mUser');
        $this->load->model('Mproduk', 'mProduk');
        $this->load->model('Mtransaksi', 'mTransaksi');
 
       
    }

    public function index()
    {
        $data['user'] = $this->mKategori->get_count();
        $data['kategori'] = $this->mUser->get_count();
        $data['transaksi'] = $this->mTransaksi->get_count();
        $data['produk'] = $this->mProduk->get_count();
        $data['session'] = $this->session->userdata('username');
      
        $data['page'] = 'admin/dashboard';
        $this->load->view('layout/base', $data);
    }

    public function tambah()
    {
        $data['page'] = 'admin/anggota/tambahAnggota';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        $this->agt->tambah_data($post);
        redirect('anggota');
    }

    public function edit($id)
    {
        $data['anggota'] = $this->agt->get_data_id($id);
        $data['page'] = 'admin/anggota/editAnggota';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->agt->edit_data($post, $id);
        redirect('anggota');
    }

    public function prosesHapus($id)
    {
        $this->agt->hapus_data($id);
        redirect('anggota');
    }
    
}
