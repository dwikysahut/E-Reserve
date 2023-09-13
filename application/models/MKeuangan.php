<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MKeuangan extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('view_data_denda');
        return $query->result_array();
    }
    public function get_data_by_id($id){
        $this->db->where('id',$id);
        $query= $this->db->get('denda');
        return $query->row_array();

    }
    public function get_data_by_id_transaksi($id){
        $this->db->where('id_pengembalian',$id);
        $query= $this->db->get('denda');
        return $query->row_array();

    }
    public function tambah_data($post)
    {
        $input = array(
            'id_pengembalian' => $post['id_transaksi'],
            'total' => $post['total'],
            'status' => 0
        );
        $this->db->insert('denda', $input);
    }
    public function edit_data($post, $id)
    {
        $input = array(
            'total' => $post['total'],
            'status' => $post['status']
        );
        $this->db->where('id', $id);
        $this->db->update('denda', $input);
    }
     public function edit_data_by_transaksi($post, $id)
    {
        $input = array(
            'total' => $post['total']
        );
        $this->db->where('id_pengembalian', $id);
        $this->db->update('denda', $input);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('denda');
    }
    public function hapus_data_by_transaksi($id)
    {
        $this->db->where('id_pengembalian', $id);
        $this->db->delete('denda');
    }
  
    public function get_count(){
        
        return $this->db->count_all_results('denda');
    }
}
