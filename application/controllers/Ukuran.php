<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ukuran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mukuran', 'ukuran');
    }
    public function index()
    {
        $data['ukuran'] = $this->ukuran->get_data();
        $data['page'] = 'admin/kategori/kategori';
        $this->load->view('layout/base', $data);
    }

  
}
