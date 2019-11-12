        <div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-8 list-box px-5 py-5">
                    <form class="col-12" action="<?php echo base_url('tudosen/add'); ?>" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <h1 class="heading-3">Tambah Dosen Pembimbing</h1>
                        </div>
                            <div class="form-group row">
                                <label>NIK <span class="error-msg-regis"><?php echo form_error('nikdosbing'); ?></span></label>
                                <input type="text" class="form-control" id="nikDosbing" name="nikdosbing" placeholder="Enter NIK" required>
                            </div>
                            <div class="form-group row">
                                <label>Nama <span class="error-msg-regis"><?php echo form_error('namadosbing'); ?></span></label>
                                <input type="text" class="form-control" id="namaDosbing" name="namadosbing" placeholder="Enter Name">
                            </div>
                            <div class="form-group row">
                                <label>Password <span class="error-msg-regis"><?php echo form_error('passdosbing'); ?></span></label>
                                <input type="text" class="form-control" id="passDosbing" name="passdosbing" placeholder="Enter Password">
                            </div>
                            <div class="form-group row">
                                <label>Status</label>
                                <select class="form-control" id="levelDosbing" name="leveldosbing">
                                    <option value="1">Dosen Pembimbing</option>
                                    <option value="2">Koor Dosen Pembimbing</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label>Bidang Kajian</label>
                                <select class="form-control" id="bidangKajian" name="bidangkajian">
                                    <option value="Ergonomi">Ergonomi</option>
                                    <option value="Quality Control">Quality Control</option>
                                    <option value="Supply Chain Management">Supply Chain Management</option>
                                    <option value="PPIC">PPIC</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center loginButton">
                                    <button type="submit" class="btn btn-success col-12">Tambah</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-1">
                                    <?php if ($this->session->flashdata('add_nik_add')) { ?>
                                            <div class="alert alert-danger m-3"> <?= $this->session->flashdata('add_nik_add') ?> </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="back-link col-12 d-flex justify-content-center align-items-center">
                                    <p><a href=" <?php echo base_url('dosbing') ?>  ">Back</a></p>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>