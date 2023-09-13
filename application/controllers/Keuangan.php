<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MKeuangan', 'keuangan');
    }

    public function index()
    {
        $data['keuangan'] = $this->keuangan->get_data();
        $data['page'] = 'admin/keuangan/keuangan';
        $this->load->view('layout/base', $data);
    }

    public function edit($id)
    {
        $data['keuangan'] = $this->keuangan->get_data_by_id($id);
        $data['page'] = 'admin/keuangan/editKeuangan';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->keuangan->edit_data($post, $id);
        redirect('keuangan');
    }

    public function prosesHapus($id)
    {
        $this->keuangan->hapus_data($id);
        redirect('keuangan');
    }
    
}
