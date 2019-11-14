<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-7 list-box px-5">
                    <div class="list-box-header mt-5 mb-2">
                        BIODATA MAHASISWA
                        <div class="addDosenPembimbing">
                                <?php
                                foreach($datadirimhs->result_array() as $i):
                                    $file = $i['file_kp'];
                                endforeach; ?>
                                <p class="m-0 alert-null-dosen">
                                    <?php
                                        if ($file == NULL) {
                                            echo ("File KP Belum Di Upload*)");
                                        }
                                    ?>
                                </p>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"> Upload File KP</button>
                        </div>
                    </div>
                    <hr>
                    <?php if ($this->session->flashdata('file_error')) { ?>
                        <div class="alert alert-danger m-3"> <?= $this->session->flashdata('file_error') ?> </div>
                    <?php }?>
                    <?php if ($this->session->flashdata('file_success')) { ?>
                        <div class="alert alert-success m-3"> <?= $this->session->flashdata('file_success') ?> </div>
                    <?php }?>
                    <div class="bio-mhs">
                        <?php
                            foreach($datadirimhs->result_array() as $i):
                                $id = $i['id'];
                                $nama = $i['nama'];
                                $ipk = $i['ipk'];
                                $sks = $i['sks'];
                                $id_dosbing = $i['id_dosbing'];
                                $nilai = $i['nilai'];
                                $query = $this->db->query("SELECT nama FROM dosen WHERE id='".$id_dosbing."'");
                                $nama_dosbing = $query->row()->nama;

                            endforeach; ?>

                            <table class="bio-table" align="center">
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><?php echo ($id) ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo ($nama) ?></td>
                                </tr>
                                <tr>
                                    <td>IPK</td>
                                    <td>:</td>
                                    <td><?php echo ($ipk) ?></td>
                                </tr>
                                <tr>
                                    <td>SKS</td>
                                    <td>:</td>
                                    <td><?php echo ($sks) ?></td>
                                </tr>
                                <tr>
                                    <td>Dosen Pembimbing</td>
                                    <td>:</td>
                                    <td><?php echo ($nama_dosbing) ?></td>
                                </tr>
                                <?php
                                    $query = $this->db->query("SELECT file_kp FROM mahasiswa WHERE id='".$id."'");
                                    if($query->row()->file_kp != NULL) {
                                        $a;
                                        if($nilai == NULL) {
                                            $a = "-";
                                        } else {
                                            $a = $nilai;
                                        }
                                        echo ("
                                        <tr>
                                        <td>Nilai</td>
                                        <td>:</td>
                                        <td>$a</td>
                                        </tr>
                                        ");
                                    }
                                ?>
                            </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload File Here</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open_multipart('cmhs/file_data');?>
                <div class="modal-body">
                    <input type="file" name="berkas" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </body>
</html>