<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-8 list-box px-5 py-5">
                    <form class="col-12" action="<?php echo base_url('tumhs/update'); ?>" method="POST">
                        <div class="col-12 d-flex justify-content-center">
                            <h1 class="heading-3">Update Mahasiswa</h1>
                        </div>
                        <?php
                            $kk = $this->input->get('id');
                            $query = $this->db->query(
                                "SELECT *
                                FROM mahasiswa
                                WHERE id='".$kk."'"
                            );
                            $result = $query->result_array();
                            foreach($result as $i):
                                $id = $i['id'];
                                $nama = $i['nama'];
                                $password = $i['password'];
                                $ipk = $i['ipk'];
                                $sks = $i['sks'];
                                $tema = $i['id_kp'];
                                $perusahaan = $i['perusahaan'];
                                $nilai = $i['nilai'];
                                endforeach
                        ?>
                            <div class="form-group row">
                                <label>NIM <span class="error-msg-regis"><?php echo form_error('nimmhs'); ?></span></label>
                                <input type="text" class="form-control" id="nimMhs" name="nimmhs" placeholder="Enter NIM" value="<?php echo $id; ?>" required readonly>
                            </div>
                            <div class="form-group row">
                                <label>Nama <span class="error-msg-regis"><?php echo form_error('namamhs'); ?></span></label>
                                <input type="text" class="form-control" id="namaMhs" name="namamhs" placeholder="Enter Nama" value="<?php echo $nama; ?>" required>
                            </div>
                            <div class="form-group row">
                                <label>Password <span class="error-msg-regis"><?php echo form_error('passmhs'); ?></span></label>
                                <input type="text" class="form-control" id="passMhs" name="passmhs" placeholder="Enter Password" value="<?php echo $password; ?>" required>
                            </div>
                            <div class="form-group row">
                                <label>IPK <span class="error-msg-regis"><?php echo form_error('ipkmhs'); ?></span></label>
                                <input type="decimal" class="form-control" id="ipkMhs" name="ipkmhs" placeholder="x.xx"  value="<?php echo $ipk; ?>" required>
                            </div>
                            <div class="form-group row">
                                <label>SKS <span class="error-msg-regis"><?php echo form_error('sksmhs'); ?></span></label>
                                <input type="number" class="form-control" id="sksMhs" name="sksmhs" placeholder="Jumlah SKS" value="<?php echo $sks; ?>" required>
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
                            <script>
                                $(document).ready(function() {
                                    $("#temaMhs").val('<?php echo $id_kp; ?>')
                                })
                            </script>
                            <div class="form-group row">
                                <label>Nama Perusahaan <span class="error-msg-regis"><?php echo form_error('perusahaanmhs'); ?></span></label>
                                <input type="text" class="form-control" id="perusahaanmhs" name="perusahaanmhs" placeholder="Enter Nama Perusahaan" value="<?php echo $perusahaan; ?>" required>
                            </div>
                            <div class="form-group row">
                                <label>Nilai <span class="error-msg-regis"><?php echo form_error('nilaimhs'); ?></span></label>
                                <input type="number" class="form-control" id="nilaiMhs" name="nilaimhs" placeholder="Nilai" value="<?php echo $nilai; ?>" required>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center loginButton">
                                    <button type="submit" class="btn btn-success col-12">Update</button>
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
                                    <p><a href=" <?php echo base_url('mhs') ?>  ">Back</a></p>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>