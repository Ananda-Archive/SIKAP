<?php

class CKoor extends CI_Controller {

    public function index() {
        $x['data'] = $this->m_mhs->get_mhs_dosbing();
        $y['datamhsnone'] = $this->m_mhs->get_mhs_none();
        $z['datadosbingless'] = $this->m_dosen->get_dosen_less();
        $this->load->view('template/head.php',$y);
        $this->load->view('template/navbar.php',$z);
        $this->load->view('Dosbing/listmhsdosbing',$x);
    }

    public function add() {
        $this->session->set_flashdata('adddosbingmhs_success','Mahasiswa Berhasil didaftarkan ke dosen pembimbing');
        $post = $this->input->post();
        $id = $post['daftardosbingmhs'];
        $id_dosbing = $post['daftardosbingless'];
        $data = array(
            'id_dosbing' => $id_dosbing
        );
        $where = array(
            'id' => $id
        );
        $this->m_mhs->add_mhs_dosbing($where,$data,'mahasiswa');
        redirect('koordosbing');
    }

    public function nullMhs() {
        $id = $this->input->POST('iddelete');
        $where = array(
            'id' => $id    
            );
        $this->session->set_flashdata('delete_success','Berhasil Delete');
        $this->m_mhs->mhs_null($where,'mahasiswa');
        redirect('koordosbing');
    }

}

?>