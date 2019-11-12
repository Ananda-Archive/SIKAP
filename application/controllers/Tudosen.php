<?php

class Tudosen extends CI_Controller {

    public function index() {
        $x['data'] = $this->m_user->tu_show_dosbing();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/dosbing',$x);
    }

    public function index2() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/CRUD/add_dosbing');
    }

    public function add() {

        // $this->load->library('form_validation');
        $this->form_validation->set_rules('nikdosbing','NIK','required|max_length[14]|min_length[3]');
        $this->form_validation->set_rules('namadosbing','Nama Dosbing','required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('passdosbing','Password','required|min_length[6]|max_length[30]');
        $this->form_validation->set_message('required','Wajib Diisi');
        $this->form_validation->set_message('max_length','maksimal karakter {param}');
        $this->form_validation->set_message('min_length','minimal karakter {param}');

        if ($this->form_validation->run() == FALSE) {
            $this->index2();
        } else {
            $id = $this->input->post('nikdosbing');
            $where = array(
                'id' => $id    
                );
            $check = $this->m_user->check("dosen",$where)->num_rows();
            if($check > 0) {
                $this->session->set_flashdata('add_nik_add','NIK Sudah Terdaftar');
                redirect('addDosbing');
            } else {
                $this->session->set_flashdata('regis_success','Registrasi berhasil');
                $user = $this->m_user;
                $user->tu_add_dosbing();
                redirect('dosbing');
            }
        }
    }

}

?>