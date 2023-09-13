<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mbuku', 'bk');
        $this->load->model('Manggota', 'agt');
        $this->load->model('MKeuangan', 'keuangan');
        $this->load->model('MPeminjaman', 'peminjaman');
        $this->load->model('MPengembalian', 'pengembalian');
    }
    public function index()
    {
        $data['page'] = 'admin/laporan/laporan';
        $this->load->view('layout/baselaporan', $data);
    }
    public function buku()
    {
        $data['buku'] = $this->bk->get_data();
        $data['page'] = 'admin/laporan/laporanBuku';
        $this->load->view('layout/baselaporan', $data);
    }
    public function anggota()
    {
        $data['anggota'] = $this->agt->get_data();
        $data['page'] = 'admin/laporan/laporanAnggota';
        $this->load->view('layout/baselaporan', $data);
    }
    public function keuangan()
    {
        $data['keuangan'] = $this->keuangan->get_data();
        $data['page'] = 'admin/laporan/laporanKeuangan';
        $this->load->view('layout/baselaporan', $data);
    }
    public function peminjaman()
    {
        $data['peminjaman'] = $this->peminjaman->get_data();
        $data['page'] = 'admin/laporan/laporanPeminjaman';
        $this->load->view('layout/baselaporan', $data);
    }
    public function pengembalian()
    {
        $data['pengembalian'] = $this->pengembalian->get_data_view();
        $data['page'] = 'admin/laporan/laporanPengembalian';
        $this->load->view('layout/baselaporan', $data);
    }

}
