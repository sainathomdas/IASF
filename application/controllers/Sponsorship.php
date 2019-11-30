<?php

class Sponsorship extends CI_Controller {

    public function index() {
        $data['ViewContent']='sponsorship';
        
        
        $this->load->view('layout/main',$data);
    }

    

}