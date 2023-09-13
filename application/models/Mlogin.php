<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mlogin extends CI_Model
{
    public function get_data()
    {
        $q = $this->db->get('user');
        return $q->result_array();
    }
    public function login($post)
    {
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $q = $this->db->get('user');
        
        if($q->num_rows()>0){
            
            $array = array(
                'id' => $q->row()->id,
                'username'=>  $q->row()->username,
                'role' => $q->row()->role,
            );
            $this->session->set_userdata( $array );
            redirect('home');
        }else{
           $this->session->set_flashdata('errorlogin', '<p class="login-box-msg text-danger" style="color: white !important; padding: 0px !important;">username atau password salah</p>');  
                     
            redirect('login');
        }
    }
}
