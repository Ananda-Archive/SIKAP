        <div class="container-fluid vh-100">
            <div class="row vh-100">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="row regis-box d-flex justify-content-center align-items-center">
                        
                        <form class="col-10" action="<?php echo base_url('regis/daftartu'); ?>" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <h1 class="heading-3">Registrasi Staff TU</h1>
                        </div>
                            <div class="form-group row">
                                <label>NIK <span class="error-msg-regis"><?php echo form_error('idregis'); ?></span></label>
                                <input type="text" class="form-control" name="idregis" placeholder="Enter NIK">
                            </div>
                            <div class="form-group row">
                                <label>Nama <span class="error-msg-regis"><?php echo form_error('namaregis'); ?></span></label>
                                <input type="text" class="form-control" name="namaregis" placeholder="Enter Nama">
                            </div>
                            <div class="form-group row">
                                <label>Password <span class="error-msg-regis"><?php echo form_error('passregis'); ?></span></label>
                                <input type="password" class="form-control" name="passregis" placeholder="Enter Password">
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center loginButton">
                                    <button type="submit" class="btn btn-success col-12">Register Now!</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-1">
                                    <?php if ($this->session->flashdata('regis_success')) { ?>
                                            <div class="alert alert-success m-3"> <?= $this->session->flashdata('regis_success') ?> </div>
                                    <?php } else {
                                        if ($this->session->flashdata('regis_nik_regis')) { ?>
                                            <div class="alert alert-danger m-3"> <?= $this->session->flashdata('regis_nik_regis') ?> </div>
                                    <?php } else {
                                        if ($this->session->flashdata('regis_nik_not_found')) { ?>
                                            <div class="alert alert-danger m-3"> <?= $this->session->flashdata('regis_nik_not_found') ?> </div>
                                    <?php }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="back-link col-12 d-flex justify-content-center align-items-center">
                                    <p><a href=" <?php echo base_url('login') ?>  ">Back</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>