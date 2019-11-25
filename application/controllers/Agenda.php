<?php

class Agenda extends CI_Controller {

    public function index() {
        $data['ViewContent']='agenda';
        
        
        $this->load->view('layout/main',$data);
    }

    

}