<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-8 list-box px-5 py-5">
                    <form class="col-12" action="<?php echo base_url('tumhs/add'); ?>" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <h1 class="heading-3">Tambah Mahasiswa</h1>
                        </div>
                            <div class="form-group row">
                                <label>NIM <span class="error-msg-regis"><?php echo form_error('nimmhs'); ?></span></label>
                                <input type="text" class="form-control" id="nimMhs" name="nimmhs" placeholder="Enter NIM" required>
                            </div>
                            <div class="form-group row">
                                <label>Nama <span class="error-msg-regis"><?php echo form_error('namamhs'); ?></span></label>
                                <input type="text" class="form-control" id="namaMhs" name="namamhs" placeholder="Enter Nama" required>
                            </div>
                            <div class="form-group row">
                                <label>Password <span class="error-msg-regis"><?php echo form_error('passmhs'); ?></span></label>
                                <input type="text" class="form-control" id="passMhs" name="passmhs" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group row">
                                <label>IPK <span class="error-msg-regis"><?php echo form_error('ipkmhs'); ?></span></label>
                                <input type="decimal" class="form-control" id="ipkMhs" name="ipkmhs" placeholder="x.xx" required>
                            </div>
                            <div class="form-group row">
                                <label>SKS <span class="error-msg-regis"><?php echo form_error('sksmhs'); ?></span></label>
                                <input type="number" class="form-control" id="sksMhs" name="sksmhs" placeholder="Jumlah SKS" required>
                            </div>
                            <div class="form-group row">
                                <label>Tema KP</label>
                                <select class="form-control" id="temaMhs" name="temamhs">
                                    <?php
                                        foreach($datakp->result_array() as $j):
                                            $id = $j['id'];
                                            $judul = $j['judul'];
                                    ?>
                                    <option value="<?php echo $id ?>"><?php echo $judul ?></option>
                                        <?php endforeach; ?>
                                </select>
                            </div>
                            
                            <div class="form-group row">
                                <label>Nama Perusahaan <span class="error-msg-regis"><?php echo form_error('perusahaanmhs'); ?></span></label>
                                <input type="text" class="form-control" id="perusahaanmhs" name="perusahaanmhs" placeholder="Enter Nama Perusahaan" required>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center loginButton">
                                    <button type="submit" class="btn btn-success col-12">Tambah</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-1">
                                    <?php if ($this->session->flashdata('add_nim_add')) { ?>
                                            <div class="alert alert-danger m-3"> <?= $this->session->flashdata('add_nim_add') ?> </div>
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