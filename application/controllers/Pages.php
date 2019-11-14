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

    public function TUDosen_update() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/CRUD/updateDosbing');
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

    public function TUMhs_update() {
        $z['datakp'] = $this->m_mhs->get_tema_kp();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/CRUD/updateMhs',$z);
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
        $id = $this->session->userdata('id');
        $x['datamhsdosbing'] = $this->m_mhs->tu_show_mhsdosbing($id);
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('Dosbing/profiledosen',$x);
    }

    public function KoorDosbingIndex() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('dosbing/index.php');
    }

    public function UDosbing() {
        $x['data'] = $this->m_mhs->get_mhs_dosbing();
        $y['datamhsnone'] = $this->m_mhs->get_mhs_none();
        $z['datadosbingless'] = $this->m_dosen->get_dosen_less();
        $this->load->view('template/head.php',$y);
        $this->load->view('template/navbar.php',$z);
        $this->load->view('Dosbing/listmhsdosbing',$x);
    }

    public function ReadMhs() {
        $id = $this->session->userdata('id');
        $x['datadirimhs'] = $this->m_mhs->check("mahasiswa",array('id =' => $id));
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('Mahasiswa/index',$x);
    }

    // public function UploadFileMhs() {
    //     $id = $this->session->userdata('id');
    //     $x['datadirimhs'] = $this->m_mhs->check("mahasiswa",array('id =' => $id));
    //     $this->load->view('template/head.php');
    //     $this->load->view('template/navbar.php');
    //     $this->load->view('Mahasiswa/uploadfile');
    // }

    public function NilaiKPMhs() {
        $id = $this->session->userdata('id');
        $x['datadirimhs'] = $this->m_mhs->check("mahasiswa",array('id =' => $id));
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('Mahasiswa/nilaikp');
    }

}

?>