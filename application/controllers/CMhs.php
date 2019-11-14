<?php

class CMhs extends CI_Controller {

    // public function file_data(){
    //     $name = $_FILES["file"]["name"];
    //     $ext = end((explode(".", $name))); # extra () to prevent notice
	// 	$config['upload_path']          = 'base_url/(assets)';
	// 	$config['allowed_types']        = 'pdf|docx|doc';
	// 	$config['max_size']             = 10048000;
    //     $config['overwrite']            = TRUE;
 
	// 	$this->load->library('upload', $config);
 
	// 	if ( ! $this->CMhs->do_upload('berkas')){
	// 		$this->session->set_flashdata('file_error','Gagal Upload File');
	// 		redirect('datamhsnone');
	// 	}else{
    //         $this->session->set_flashdata('file_success','Berhasil Upload File');
    //         $upload_data = $this->upload->data();
    //         $this->m_mhs->insert_data($upload_data['full_path']);
	// 		redirect('datamhsnone');			
	// 	}
    // }
    // public function a() {
    //     echo "a";
    // }

    public function file_data() {

        $config['upload_path'] = './assets/data';
        $config['allowed_types'] = 'pdf|docx|doc';
        $config['max_size'] = 100000000;
        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('berkas')) {
            $this->session->set_flashdata('file_error','Gagal Upload File');
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            //file is uploaded successfully
            //now get the file uploaded data 
            $upload_data = $this->upload->data();
            //get the uploaded file name
            $data['berkas'] = $upload_data['file_name'];
            //store pic data to the db
            $this->m_mhs->store_data($data);
            $this->session->set_flashdata('file_success','Berhasil Upload File');
            redirect('datamhsnone');
        }

    }
}

?>