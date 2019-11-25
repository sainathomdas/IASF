<?php

class About extends CI_Controller {

    public function index() {
        $data['ViewContent']='about';
        
        
        $this->load->view('layout/main',$data);
    }

    

}