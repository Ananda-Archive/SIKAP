<?php

class Regis extends CI_Controller {

    function index() {
        $this->load->view("template/head.php");
        $this->load->view("daftartu");
    }

    function daftartu() {
        // $this->load->library('form_validation');
        $this->form_validation->set_rules('idregis', 'NIK', 'required|max_length[14]|min_length[3]');
        $this->form_validation->set_rules('namaregis', 'Nama Lengkap', 'required|max_length[40]|min_length[3]');
        $this->form_validation->set_rules('passregis', 'password', 'required|max_length[50]|min_length[6]');
        $this->form_validation->set_message('required','Wajib Diisi');
        $this->form_validation->set_message('max_length','maksimal karakter {param}');
        $this->form_validation->set_message('min_length','minimal karakter {param}');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        }
        else {
            $idregis = $this->input->post('idregis');
            $where = array(
                'id' => $idregis    
                );
            $check = $this->m_user->check("list_tu",$where)->num_rows();
            if($check > 0) {
                $check = $this->m_user->check("tu",$where)->num_rows();
                if($check == 0) {
                    $this->session->set_flashdata('regis_success','Registrasi berhasil');
                    $user = $this->m_user;
                    $user->regis();
                    redirect('register');
                } else {
                    $this->session->set_flashdata('regis_nik_regis','NIK Sudah Terdaftar');
                    redirect('register');
                }
            } else {
                $this->session->set_flashdata('regis_nik_not_found','NIK tidak diketahui');
                redirect('register');
            }
        }
    }

}

?>