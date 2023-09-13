<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mpengarang extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('pengarang');
        return $q->result_array();
    }
    public function get_data_id($id)
    {
        $this->db->where('id', $id);
        $q = $this->db->get('pengarang');
        return $q->row_array();
    }
    public function tambah_data($post)
    {
        $input = array(
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'no_telp' => $post['no_telp']
        );
        $this->db->insert('pengarang', $input);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengarang');
    }
    public function edit_data($post, $id)
    {
        $input = array(
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'no_telp' => $post['no_telp']
        );
        $this->db->where('id', $id);
        $this->db->update('pengarang', $input);
    }
}
