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
        $x['data'] = $this->m_dosen->tu_show_dosbing();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/dosbing',$x);
    }

    public function TUDosen_add() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/CRUD/add_dosbing');
    }

    public function TUMhs() {
        $x['data'] = $this->m_mhs->tu_show_mhs();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/mhs',$x);
    }

    public function TUMhs_add() {
        $z['datakp'] = $this->m_mhs->get_tema_kp();
        $x['datadosen'] = $this->m_mhs->get_dosen();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php',$x);
        $this->load->view('TU/CRUD/add_mhs',$z);
    }

    public function TUkp() {
        $x['datalistkp'] = $this->m_kp->tu_show_kp();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/kp',$x);
    }

    public function TUkp_add() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/CRUD/add_kp');
    }

    public function ReadDosbing() {

    }

    public function KoorDosbingIndex() {

    }

    public function UDosbing() {
        
    }

}

?>