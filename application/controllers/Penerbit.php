<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerbit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mpenerbit', 'pn');
    }
    public function index()
    {
        $data['penerbit'] = $this->pn->get_data();
        $data['page'] = 'admin/penerbit/penerbit';
        $this->load->view('layout/base', $data);
    }
    public function tambah()
    {
        $data['page'] = 'admin/penerbit/tambahPenerbit';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        $this->pn->tambah_data($post);
        redirect('penerbit');
    }

    public function edit($id)
    {
        $data['penerbit'] = $this->pn->get_data_id($id);
        $data['page'] = 'admin/penerbit/editPenerbit';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->pn->edit_data($post, $id);
        redirect('penerbit');
    }

    public function prosesHapus($id)
    {
        $this->pn->hapus_data($id);
        redirect('penerbit');
    }
}
