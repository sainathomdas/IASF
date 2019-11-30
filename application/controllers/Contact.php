<?php

class Contact extends CI_Controller {

    public function index() {
        $data['ViewContent']='contact';
        
        
        $this->load->view('layout/main',$data);
    }

    

}