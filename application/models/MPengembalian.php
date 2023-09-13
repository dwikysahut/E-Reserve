<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPengembalian extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('pengembalian');
        return $query->result_array();
    }
    public function get_data_view()
    {
        $query = $this->db->get('view_pengembalian');
        return $query->result_array();
    }
    public function get_data_by_id($id){
        $this->db->where('id_transaksi',$id);
        $query= $this->db->get('view_pengembalian');
        return $query->row_array();

    }
    public function get_data_by_id_peminjaman($id){
        $this->db->where('id_peminjaman',$id);
        $query= $this->db->get('view_pengembalian');
        return $query->row_array();

    }
    public function tambah_data($post)
    {
        $input = array(
            'id_peminjaman' => $post['id_transaksi'],
            'tanggal_kembali' => $post['tanggal_kembali']
        );
        $this->db->insert('pengembalian', $input);
    }
    public function edit_data($post, $id)
    {
        $input = array(
            'tanggal_kembali' => $post['tanggal_kembali']
        );
        $this->db->where('id_transaksi', $id);
        $this->db->update('pengembalian', $input);
    }
    public function hapus_data($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('pengembalian');
    }
    public function get_count(){
        
        return $this->db->count_all_results('pengembalian');
    }

}
