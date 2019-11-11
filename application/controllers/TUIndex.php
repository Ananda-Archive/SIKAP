<?php

class TUIndex extends CI_Controller {

    public function index() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/index.php');
    }

}

?>