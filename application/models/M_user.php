<?php

class M_user extends CI_Model {

    public function validate_login($idlogin,$passlogin) {
        $query = $this->db->query("SELECT id,password,level FROM tu WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "' UNION SELECT id,password,level FROM dosen WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "' UNION SELECT id,password,level FROM mahasiswa WHERE id ='" . $idlogin . "' AND password = '" . $passlogin . "'");
        return $query;
    }

}

?>