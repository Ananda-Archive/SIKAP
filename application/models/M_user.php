<?php

class M_user extends CI_Model {

    private $table_tu = "tu";
    public $id;
    public $nama;
    public $password;

    public function validate_login($idlogin,$passlogin) {
        $query = $this->db->query("SELECT id,nama,password,level FROM tu WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "' UNION SELECT id,nama,password,level FROM dosen WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "' UNION SELECT id,nama,password,level FROM mahasiswa WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "'");
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

}

?>