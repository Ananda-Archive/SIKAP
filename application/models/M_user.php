<?php

class M_user extends CI_Model {

    private $table_tu = "tu";
    private $table_dosen = "dosen";
    public $id;
    public $nama;
    public $password;
    public $level;
    public $bidang_kajian;

    public function validate_login($idlogin,$passlogin) {
        $query = $this->db->query("SELECT id,password,level FROM tu WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "' UNION SELECT id,password,level FROM dosen WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "' UNION SELECT id,password,level FROM mahasiswa WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "'");
        return $query;
    }

    public function check($table,$where){		
		return $this->db->get_where($table,$where);
	}

    public function regis() {
        $post = $this->input->post();
        $this->id = $post['idregis'];
        $this->nama = $post['namaregis'];
        $this->password = $post['passregis'];
        $this->db->insert($this->table_tu, $this);
    }

    public function tu_show_dosbing(){
        $query = $this->db->query("SELECT id,nama,level FROM dosen");
        return $query;
    }

    public function tu_add_dosbing() {
        $post = $this->input->post();
        $this->id = $post['nikdosbing'];
        $this->nama = $post['namadosbing'];
        $this->password = $post['passdosbing'];
        $this->level = $post['leveldosbing'];
        $this->bidang_kajian = $post['bidangkajian'];
        $this->db->insert($this->table_dosen, $this);
    }

}

?>