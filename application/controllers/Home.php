<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
    }
	public function index()
	{
        if($this->session->userdata('username')){
            if($this->session->userdata('role')==1){
                echo $this->session->userdata('role');
            redirect('dashboard');

            }
            else{
            }


        }
        else{
            echo 'halo';
            redirect('login');
        }
      
		
	}

}