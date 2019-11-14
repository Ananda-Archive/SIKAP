<?php

class M_dosen extends CI_Model {

    private $table_dosen = "dosen";
    public $id;
    public $nama;
    public $password;
    public $level;
    public $bidang_kajian;

    public function check($table,$where){		
		return $this->db->get_where($table,$where);
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

    public function tu_update_dosbing($id,$data) {
        $this->db->where('id',$id);
        $this->db->update($this->table_dosen,$data);
    }

    public function get_dosen_less() {
        $query = $this->db->query("
            SELECT dosen.id,dosen.nama, COUNT(*)
            FROM dosen
            JOIN mahasiswa ON mahasiswa.id_dosbing = dosen.id
            GROUP BY 1
            HAVING COUNT(*) < 8
        ");
        return $query;
    }

    public function dosen_delete($where,$table) {
        $this->db->where($where);
	    $this->db->delete($table);
    }

}

?>