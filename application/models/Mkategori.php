<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mkategori extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('kategori');
        return $q->result_array();
    }
    public function get_data_id($id)
    {
        $this->db->where('id', $id);
        $q = $this->db->get('kategori');
        return $q->row_array();
    }
    public function get_count(){
        $q = $this->db->count_all_results('kategori');
        return $q;
    
    }
    public function tambah_data($post)
    {
        $input = array(
            'nama' => $post['nama']
        );
        $this->db->insert('kategori', $input);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori');
    }
    public function edit_data($post, $id)
    {
        $input = array(
            'nama' => $post['nama']
        );
        $this->db->where('id', $id);
        $this->db->update('kategori', $input);
    }
}
