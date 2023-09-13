<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPegawai extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('pegawai');
        return $q->result_array();
    }
   
}
