<?php

class TUkp extends CI_Controller {

    public function index() {
        $x['datalistkp'] = $this->m_kp->tu_show_kp();
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/kp',$x);
    }

    public function index2() {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/CRUD/add_kp');
    } 

    public function add() {
        $this->form_validation->set_rules('idkp','ID','required|min_length[3]|max_length[10]');
        $this->form_validation->set_rules('judulkp','Tema KP','required|min_length[3]|max_length[40]');

        $this->form_validation->set_message('required','Wajib Diisi');
        $this->form_validation->set_message('max_length','maksimal karakter {param}');
        $this->form_validation->set_message('min_length','minimal karakter {param}');

        if ($this->form_validation->run() == FALSE) {
            $this->index2();
        } else {
            $id = $this->input->post('idkp');
            $where = array(
                'id' => $id    
                );
            $check = $this->m_kp->check("kp",$where)->num_rows();
            if($check > 0) {
                $this->session->set_flashdata('add_id_add','ID Sudah Terdaftar');
                redirect('addKp');
            } else {
                $judul = $this->input->post('judulkp');
                $where = array(
                    'judul' => $judul
                );
                $check = $this->m_kp->check("kp",$where)->num_rows();
                if($check > 0) {
                    $this->session->set_flashdata('add_temakp_add','Judul Sudah Terdaftar');
                    redirect('addKp');
                } else {
                    $this->session->set_flashdata('regis_success','Registrasi berhasil');
                    $user = $this->m_kp;
                    $user->add();
                    redirect('kerjapraktek');
                }
            }
        }
    }

}

?>