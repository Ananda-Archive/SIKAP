<?php

class M_kp extends CI_Model {

    private $table_kp = "kp";
    public $id;
    public $judul;

    public function check($table,$where){		
		return $this->db->get_where($table,$where);
    }

    public function tu_show_kp() {
        $query = $this->db->query("SELECT * FROM kp");
        return $query;
    }

    public function add() {
        $post = $this->input->post();
        $this->id = $post['idkp'];
        $this->judul = $post['judulkp'];
        $this->db->insert($this->table_kp, $this);
    }

}

?>