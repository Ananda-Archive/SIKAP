<?php

class TUmhs extends CI_Controller {

    public function index() {
        $x['data'] = $this->m_mhs->tu_show_mhs();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/mhs',$x);
    }

    public function index2() {
        $x['datakp'] = $this->m_mhs->get_tema_kp();
        $z['datadosen'] = $this->m_mhs->get_dosen();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php',$z);
        $this->load->view('TU/CRUD/add_mhs',$x);
    } 

    public function add() {
        $this->form_validation->set_rules('nimmhs','NIM','required|min_length[3]|max_length[14]');
        $this->form_validation->set_rules('namamhs','Nama','required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('passmhs','Password','required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('ipkmhs','IPK','required|decimal|min_length[4]|max_length[4]');
        $this->form_validation->set_rules('sksmhs','SKS','required|greater_than_equal_to[65]');
        $this->form_validation->set_rules('perusahaanmhs','Nama Perusahaan','required|min_length[3]|max_length[50]');

        $this->form_validation->set_message('required','Wajib Diisi');
        $this->form_validation->set_message('max_length','maksimal karakter {param}');
        $this->form_validation->set_message('min_length','minimal karakter {param}');
        $this->form_validation->set_message('greater_than_equal_to','Minimal SKS {param} untuk mengikuti KP');
        $this->form_validation->set_message('decimal','Input Harus decimal dengan format X.XX');

        if ($this->form_validation->run() == FALSE) {
            $this->index2();
        } else {
            $id = $this->input->post('nimmhs');
            $where = array(
                'id' => $id    
                );
            $check = $this->m_mhs->check("mahasiswa",$where)->num_rows();
            if($check > 0) {
                $this->session->set_flashdata('add_nim_add','NIM Sudah Terdaftar');
                redirect('addMhs');
            } else {
                $this->session->set_flashdata('regis_success','Registrasi berhasil');
                $user = $this->m_mhs;
                $user->add();
                redirect('mhs');
            }
        }
    }

}

?>