<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mpengarang', 'pg');
    }
    public function index()
    {
        $data['pengarang'] = $this->pg->get_data();
        $data['page'] = 'admin/pengarang/pengarang';
        $this->load->view('layout/base', $data);
    }
    public function tambah()
    {
        $data['page'] = 'admin/pengarang/tambahPengarang';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        $this->pg->tambah_data($post);
        redirect('pengarang');
    }

    public function edit($id)
    {
        $data['pengarang'] = $this->pg->get_data_id($id);
        $data['page'] = 'admin/pengarang/editPengarang';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->pg->edit_data($post, $id);
        redirect('pengarang');
    }

    public function prosesHapus($id)
    {
        $this->pg->hapus_data($id);
        redirect('pengarang');
    }
}
