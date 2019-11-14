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

    public function index3($id) {
        $this->load->view('template/head.php');
        $this->load->view('template/navbar.php');
        $this->load->view('TU/CRUD/updateDosbing?id'.$id);
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
            $check = $this->m_dosen->check("dosen",$where)->num_rows();
            if($check > 0) {
                $this->session->set_flashdata('add_nik_add','NIK Sudah Terdaftar');
                redirect('addDosbing');
            } else {
                $this->session->set_flashdata('regis_success','Registrasi berhasil');
                $user = $this->m_dosen;
                $user->tu_add_dosbing();
                redirect('dosbing');
            }
        }
    }

    public function update() {

        $this->form_validation->set_rules('nikdosbing','NIK','required|max_length[14]|min_length[3]');
        $this->form_validation->set_rules('namadosbing','Nama Dosbing','required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('passdosbing','Password','required|min_length[6]|max_length[30]');
        $this->form_validation->set_message('required','Wajib Diisi');
        $this->form_validation->set_message('max_length','maksimal karakter {param}');
        $this->form_validation->set_message('min_length','minimal karakter {param}');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('update_failed','Update Gagal');
            redirect('dosbing');
        } else {
            $id = $this->input->post('nikdosbing');
            $where = array(
                'id' => $id    
                );
            $check = $this->m_dosen->check("dosen",$where);
            if($check->num_rows() > 0) {
                $checking = $check->row();
                if($checking->id == $id) {
                    $this->session->set_flashdata('update_success','Update berhasil');
                    $datas = array (
                        'nama' => $this->input->post('namadosbing'),
                        'password' => $this->input->post('passdosbing'),
                        'level' => $this->input->post('leveldosbing'),
                        'bidang_kajian' =>$this->input->post('bidangkajian')
                    );
                    $this->m_dosen->tu_update_dosbing($id,$datas);
                    redirect('dosbing');
                } else {
                    $this->session->set_flashdata('add_nik_add','NIK Sudah Terdaftar');
                    redirect('updateDosbing');
                }
            } else {
                $this->session->set_flashdata('update_success','Update berhasil');
                $datas = array (
                    'nama' => $this->input->post('namadosbing'),
                    'password' => $this->input->post('passdosbing'),
                    'level' => $this->input->post('leveldosbing'),
                    'bidang_kajian' =>$this->input->post('bidangkajian')
                );
                $this->m_dosen->tu_update_dosbing($id,$datas);
                redirect('dosbing');
            }
        }

    }

    public function deleteDosen() {
        $id = $this->input->POST('iddelete');
        $where = array(
            'id' => $id    
            );
        $check = $this->m_mhs->check_delete($id);
        if($check->num_rows() > 0) {
            $this->session->set_flashdata('delete_failed','Gagal Delete');
            redirect('dosbing');
        } else {
            $this->session->set_flashdata('delete_success','Berhasil Delete');
            $this->m_dosen->dosen_delete($where,'dosen');
            redirect('dosbing');
        }
    }

}

?>