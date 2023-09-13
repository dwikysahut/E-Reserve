<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengembalian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MPengembalian', 'pengembalian');
        $this->load->model('MPeminjaman', 'peminjaman');
        $this->load->model('MKeuangan', 'keuangan');
        $this->load->model('MBuku', 'buku');

    }

    public function index()
    {
        $data['pengembalian'] = $this->pengembalian->get_data_view();
        $data['page'] = 'admin/pengembalian/pengembalian';
        $this->load->view('layout/base', $data);
    }

    public function tambah()
    {
        $data['peminjaman'] = $this->peminjaman->get_data_by_status();
        $data['page'] = 'admin/pengembalian/tambahPengembalian';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        if(empty($post['tanggal_kembali'])){
            $this->session->set_flashdata('msg', 'Tanggal belum diisi');
            redirect('pengembalian/tambah');

        }
       
        else{
           $this->pengembalian->tambah_data($post);
           
            $this->peminjaman->edit_status($post['id_transaksi']);
            $result= $this->pengembalian->get_data_by_id_peminjaman($post['id_transaksi']);
            $data= $this->buku->get_data_id($result['id_buku']);   
            $this->buku->edit_jumlah_kembali($result,$data);
            $diff=round((strtotime($result['tanggal_kembali']) - strtotime($result['tanggal_akhir_peminjaman'])) / (60 * 60 * 24));
            if( $diff > 0){
                $result['total']= $diff * 25000;
            $this->keuangan->tambah_data($result);
        }
       
            redirect('pengembalian');

               }
     
     
     
       
    }
    public function edit($id)
    {
        $data['pengembalian'] = $this->pengembalian->get_data_by_id($id);
        $data['page'] = 'admin/pengembalian/editPengembalian';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->pengembalian->edit_data($post, $id);
        $result= $this->pengembalian->get_data_by_id($id);
        $diff=round((strtotime($result['tanggal_kembali']) - strtotime($result['tanggal_akhir_peminjaman'])) / (60 * 60 * 24));
        if( $diff > 0){
            $result['total']= $diff * 25000;
            $check=  $this->keuangan->get_data_by_id_transaksi($id);
            if(empty($check)){
                $this->keuangan->tambah_data($result);
            }
            else{
                $this->keuangan->edit_data_by_transaksi($result,$id);
            }
      
    }
    else{
        $this->keuangan->hapus_data_by_transaksi($id);
    }
        redirect('pengembalian');
    }
    public function prosesHapus($id)
    {
        $this->pengembalian->hapus_data($id);
        redirect('pengembalian');
    }
}


    

