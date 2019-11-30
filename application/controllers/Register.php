<?php

class Register extends CI_Controller {

    public function index() {
        $data['ViewContent']='register';
        
        
        $this->load->view('layout/main',$data);
    }

    

}