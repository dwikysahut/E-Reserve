<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MPeminjaman', 'peminjaman');
        $this->load->model('MPegawai', 'pegawai');
        $this->load->model('Manggota', 'anggota');
        $this->load->model('MBuku', 'buku');
    }

    public function index()
    {
        $data['peminjaman'] = $this->peminjaman->get_data();
        $data['page'] = 'admin/peminjaman/peminjaman';
        $this->load->view('layout/base', $data);
    }

    public function tambah()
    {
        $data['pegawai'] = $this->pegawai->get_data();
        $data['page'] = 'admin/peminjaman/tambahPeminjaman';
        $this->load->view('layout/base', $data);
    }

    public function prosesTambah()
    {
        $post = $this->input->post();
        if(empty($post['nomer_anggota'])){
            $this->session->set_flashdata('msg', 'Nomer anggota harus diisi');
            redirect('peminjaman/tambah');

        }
        elseif(empty($post['id_buku'])){
            $this->session->set_flashdata('msg', 'ID Buku harus diisi');
            redirect('peminjaman/tambah');
        }
       elseif($post['jumlah']<=0){
            $this->session->set_flashdata('msg', 'Gagal...Jumlah tidak valid');
            redirect('peminjaman/tambah');
        }
       
        else{
            $data= $this->buku->get_data_id($post['id_buku']);
            $dataAnggota= $this->anggota->get_data_id($post['nomer_anggota']);
           
            if(!empty($data) && !empty($dataAnggota)){
                $result = $this->buku->edit_jumlah($post,$data);
                if($result){
                    $this->peminjaman->tambah_data($post);
                    redirect('peminjaman');
                }
                else{
                    $this->session->set_flashdata('msg', 'Gagal...Jumlah peminjaman melebihi stok');
                    redirect('peminjaman/tambah');
                   }
               
               }
               else{
                $this->session->set_flashdata('msg', 'Gagal... Data buku Atau Anggota Tidak valid');
             
                    redirect('peminjaman/tambah');
               
               }
    }
    }

    public function edit($id)
    {
        $data['pegawai'] = $this->pegawai->get_data();
        $data['peminjaman'] = $this->peminjaman->get_data_by_id($id);
        $data['page'] = 'admin/peminjaman/editPeminjaman';
        $this->load->view('layout/base', $data);
    }

    public function prosesEdit($id)
    {
        $post = $this->input->post();
        $this->peminjaman->edit_data($post, $id);
        redirect('peminjaman');
    }

    public function prosesHapus($id)
    {
        $this->peminjaman->hapus_data($id);
        redirect('peminjaman');
    }
    
}
