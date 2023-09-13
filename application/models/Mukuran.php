<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mukuran extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('ukuran');
        return $q->result_array();
    }
    public function get_data_id($id)
    {
        $this->db->where('id', $id);
        $q = $this->db->get('ukuran');
        return $q->row_array();
    }
    public function get_count(){
        $q = $this->db->count_all_results('ukuran');
        return $q;
    
    }
   
}
