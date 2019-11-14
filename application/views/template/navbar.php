<nav class="navbar navbar-expand-lg d-flex justify-content-between navbar-my">
  <a class="navbar-brand" href="<?php 
    if($this->session->userdata('level') == 0) {
      echo base_url('datamhsnone');
    } else {
      if($this->session->userdata('level') == 1) {
        echo base_url('datadosbing');
      } else {
        if($this->session->userdata('level') == 2) {
          echo base_url('indexkoordosbing');
        } else {
          if($this->session->userdata('level') == 3) {
            echo base_url('tu');
          } else {
            echo base_url('login');
          }
        }
      }
    }
  ?>">
        <div class="d-flex align-items-center">
            <img src="<?php echo base_url('assets/img/logo.png') ?>" width="150" class="d-inline-block align-top" alt="">
            <span class="ml-3 text-light">SIKAP - Sistem Informasi Kerja Praktek</span>
        </div>
  </a>
  <div class="float-right">
      <a href="<?php echo base_url('login/userlogout') ?>">
        <button type="button" class="btn btn-danger">Logout</button>
      </a>
  </div>
</nav>