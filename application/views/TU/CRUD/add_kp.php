<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-8 list-box px-5 py-5">
                    <form class="col-12" action="<?php echo base_url('tukp/add'); ?>" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <h1 class="heading-3">Tambah Tema</h1>
                        </div>
                            <div class="form-group row">
                                <label>ID <span class="error-msg-regis"><?php echo form_error('idkp'); ?></span></label>
                                <input type="text" class="form-control" id="idKp" name="idkp" placeholder="Enter ID" required>
                            </div>
                            <div class="form-group row">
                                <label>Tema KP <span class="error-msg-regis"><?php echo form_error('judulkp'); ?></span></label>
                                <input type="text" class="form-control" id="judulKp" name="judulkp" placeholder="Enter Tema KP" required>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center loginButton">
                                    <button type="submit" class="btn btn-success col-12">Tambah</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-1">
                                    <?php if ($this->session->flashdata('add_id_add')) { ?>
                                        <div class="alert alert-danger m-3"> <?= $this->session->flashdata('add_id_add') ?> </div>
                                    <?php }else {
                                            if ($this->session->flashdata('add_temakp_add')) { ?>
                                                <div class="alert alert-danger m-3"> <?= $this->session->flashdata('add_temakp_add') ?> </div>
                                    <?php }} ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="back-link col-12 d-flex justify-content-center align-items-center">
                                    <p><a href=" <?php echo base_url('kerjapraktek') ?>  ">Back</a></p>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>