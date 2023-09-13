<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mproduk extends CI_Model
{
    public function get_data()
    {
        $this->db->select('kode_produk,nama_produk,expired_date,harga_satuan,ukuran.id as id_ukuran,ukuran.nama as nama_ukuran,kategori.id as id_kategori,kategori.nama as nama_kategori');
        $this->db->from('produk');
        $this->db->join('kategori','kategori.id = produk.kategori');
        $this->db->join('ukuran','ukuran.id = produk.ukuran');
        $q = $this->db->get();
        return $q->result_array();
    }
    public function get_data_by_id($id)
    {
        $this->db->where('kode_produk', $id);
        $q = $this->db->get('produk');
        return $q->row_array();
    }
  
    public function tambah_data($post)
    {
        $this->form_validation->set_rules('kode_produk', 'kode_produk', 'required');
        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
        $this->form_validation->set_rules('expired_date', 'expired_date', 'required');
        $this->form_validation->set_rules('harga_satuan', 'harga_satuan', 'required');
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        // $this->form_validation->set_rules('cover', 'cover', 'callback_cek_upload');
        $input = array(
            'kode_produk' => $post['kode_produk'],
            'nama_produk' => $post['nama_produk'],
            'expired_date' => $post['expired_date'],
            'harga_satuan' => $post['harga_satuan'],
            'ukuran' => $post['ukuran'],
            'kategori' => $post['kategori'],
        );
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors('<span class="error">', '</span>');
            return false;
        } else {
           
                $this->db->insert('produk', $input);
                return TRUE;
           
        }
    }
    public function hapus_data($id)
    {
        $this->db->where('kode_produk', $id);
        $this->db->delete('produk');
    }
    public function edit_data($post, $id)
    {
     
        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
        $this->form_validation->set_rules('expired_date', 'expired_date', 'required');
        $this->form_validation->set_rules('harga_satuan', 'harga_satuan', 'required');
        $this->form_validation->set_rules('ukuran', 'ukuran', 'required');
        $this->form_validation->set_rules('kategori', 'kategori', 'required');
        // $this->form_validation->set_rules('cover', 'cover', 'callback_cek_upload');
        $input = array(
            'nama_produk' => $post['nama_produk'],
            'expired_date' => $post['expired_date'],
            'harga_satuan' => $post['harga_satuan'],
            'ukuran' => $post['ukuran'],
            'kategori' => $post['kategori'],
        );
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors('<span class="error">', '</span>');
            return false;
        } else {
           
                $this->db->where('kode_produk', $id);
                $this->db->update('produk', $input);
                return TRUE;
           
        }
    }
    public function cek_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        // $config['max_size'] = 10000;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        $config['overwrite'] = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('cover')) {
            $this->form_validation->set_message('cek_upload', $this->upload->display_errors());
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function edit_jumlah($post, $dataBook)
    {
        if( $dataBook['jumlah']-$post['jumlah']>=0){
        $input = array(
            'jumlah' => $dataBook['jumlah']-$post['jumlah'],
          
        );
        $this->db->where('id_buku', $post['id_buku']);
        $this->db->update('buku', $input);
        return true;
    }
    else{
        return false;
    }
    
    }
    public function edit_jumlah_kembali($post, $dataBook)
    {
        
        $input = array(
            'jumlah' => $dataBook['jumlah']+$post['jumlah'],
          
        );
        $this->db->where('id_buku', $post['id_buku']);
        $this->db->update('buku', $input);
        return true;
    
}
    public function get_count(){
        
        return $this->db->count_all_results('produk');
    }
}
