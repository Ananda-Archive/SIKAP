<?php

class M_mhs extends CI_Model {

    private $table_mhs = "mahasiswa";
    public $id;
    public $nama;
    public $password;
    public $id_kp;
    public $id_dosbing;
    public $nilai;
    public $ipk;
    public $sks;
    public $perusahaan;

    public function check($table,$where){		
		return $this->db->get_where($table,$where);
    }
    
            // SELECT mhs.id,mhs.nama,kp.judul,dosen.nama as Dosen_Pembimbing,mhs.nilai
            // FROM mahasiswa AS mhs, kp, dosen
            // WHERE mhs.id_kp = kp.id AND mhs.id_dosbing = dosen.id

    public function tu_show_mhs() {
        $query = $this->db->query("
            SELECT mhs.id,mhs.nama,kp.judul,dosen.nama as Dosen_Pembimbing,mhs.nilai
            FROM mahasiswa AS mhs
            LEFT JOIN kp ON kp.id = mhs.id_kp
            LEFT JOIN dosen ON dosen.id = mhs.id_dosbing
        ");
        return $query;
    }

    public function get_tema_kp() {
        $query = $this->db->query("SELECT * FROM kp");
        return $query;
    }

    public function get_dosen() {
        $query = $this->db->query("SELECT * FROM dosen");
        return $query;
    }

    public function add() {
        $post = $this->input->post();
        $this->id = $post['nimmhs'];
        $this->nama = $post['namamhs'];
        $this->password = $post['passmhs'];
        $this->id_kp = $post['temamhs'];
        $this->id_dosbing = $post['dosbingmhs'];
        $this->ipk = $post['ipkmhs'];
        $this->sks = $post['sksmhs'];
        $this->perusahaan = $post['perusahaanmhs'];
        $this->db->insert($this->table_mhs, $this);
    }

    public function tu_show_mhsdosbing($id) {
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE id_dosbing = '". $id ."'");
        return $query;
    }

    public function get_mhs_dosbing() {
        $query = $this->db->query("
            SELECT mhs.id,mhs.nama,kp.judul,dosen.nama as Dosen_Pembimbing,mhs.nilai
            FROM mahasiswa AS mhs
            LEFT JOIN kp ON kp.id = mhs.id_kp
            INNER JOIN dosen ON dosen.id = mhs.id_dosbing
        ");
        return $query;
    }

    public function get_mhs_none() {
        $query = $this->db->query("SELECT id,id_dosbing,nama FROM mahasiswa WHERE id_dosbing IS NULL");
        return $query;
    }

    public function add_mhs_dosbing($where,$data,$table) {
        $this->db->where($where);
		$this->db->update($table,$data);
    }

    public function check_delete($id) {
        $query = $this->db->query("SELECT * from mahasiswa WHERE id_dosbing = '". $id ."'");
        return $query;
    }

    public function tu_update_mhs($id,$data) {
        $this->db->where('id',$id);
        $this->db->update($this->table_mhs,$data);
    }

    public function mhs_delete($where,$table) {
        $this->db->where($where);
	    $this->db->delete($table);
    }

    public function mhs_null($where,$table) {
        $this->db->where($where);
        $this->db->set('id_dosbing', NULL);
	    $this->db->update($table);
    }

    function store_data($data){
		$insert_data['file_kp'] = $data['berkas'];
        $this->db->where('id', $this->session->userdata('id'));
		$query = $this->db->update('mahasiswa', $insert_data);
	}
    
}

?>