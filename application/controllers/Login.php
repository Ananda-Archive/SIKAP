<?php

class Login extends CI_Controller {

    public function index() {
        $this->load->view("template/head.php");
        $this->load->view("login");
    }

    public function userlogin() {
        //idlogin passlogin
        $idlogin = $this->input->post('idlogin');
        $passlogin = $this->input->post('passlogin');
        $validate = $this->m_user->validate_login($idlogin,$passlogin);
        if($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $id = $data['id'];
            $nama = $data['nama'];
            $password = $data['password'];
            $level = $data['level'];
            $data_session = array(
                'id'  => $id,
                'nama' => $nama,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data_session);
            if($level == 0) { //Mahasiswa
                redirect("mahasiswa/index");
            } else {
                if($level == 1) { //Dosbing
                    redirect("datadosbing");
                } else {
                    if($level == 2) { //Koor Dosbing
                        redirect("koordosbing/index");
                    } else {
                        if($level == 3) { //TU
                            redirect("tu");
                        }
                    }
                }
            }
        } else {
            $this->session->set_flashdata('login_error','Username or Password is Wrong');
            redirect('login');
        }
    }

    function userlogout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}

?>