<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muser extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('user');
        return $q->result_array();
    }
   
    public function get_count(){
        
        return $this->db->count_all_results('user');
    }
}
