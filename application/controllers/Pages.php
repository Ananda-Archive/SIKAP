<?php

class Pages extends CI_Controller {

    public function register() {
        $this->load->view("template/head.php");
        $this->load->view("daftartu");
    }

    public function TUIndex() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/index.php');
    }

    public function TUDosen() {
        $x['data'] = $this->m_user->tu_show_dosbing();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/dosbing',$x);
    }

    public function TUDosen_add() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/CRUD/add_dosbing');
    }

}

?>