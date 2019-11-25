<?php

class Home extends CI_Controller {

    public function index() {
        $data['ViewContent']='home';
        
        $data['about']='IUCEE Annual Student Forum';
        $this->load->view('layout/main',$data);
    }

    

}
?>