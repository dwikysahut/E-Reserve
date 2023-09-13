<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mkategori', 'kt');
    }
    public function index()
    {
        $data['kategori'] = $this->kt->get_data();
        $data['page'] = 'admin/kategori/kategori';
        $this->load->view('layout/base', $data);
    }

  
    public function tambah()
    {
        $data['page'] = 'admin/kategori/tambahKategori';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        $this->kt->tambah_data($post);
        redirect('kategori');
    }

    public function edit($id)
    {
        $data['kategori'] = $this->kt->get_data_id($id);
        $data['page'] = 'admin/kategori/editKategori';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->kt->edit_data($post, $id);
        redirect('kategori');
    }

    public function prosesHapus($id)
    {
        $this->kt->hapus_data($id);
        redirect('kategori');
    }
}
