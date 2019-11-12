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
            INNER JOIN dosen ON dosen.id = mhs.id_dosbing
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

}

?>