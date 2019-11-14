<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-11 list-box px-5">
                    <div class="list-box-header mt-5 mb-2">
                        MAHASISWA
                        <div class="addDosenPembimbing">
                            <p class="m-0 alert-null-dosen"><?php

                                $query = $this->db->query("SELECT * FROM mahasiswa WHERE id_dosbing IS NULL");
                                $check = $query->num_rows();
                                if($check > 0) {
                                    echo ($check." Mahasiswa Belum Memiliki Dosen Pembimbing*)");
                                }
                            ?>   </p>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                                Daftarkan Mahasiswa ke Dosbing
                            </button>
                        </div>
                    </div>
                    <hr>
                    <?php if ($this->session->flashdata('regis_success')) { ?>
                                            <div class="alert alert-success m-3"> <?= $this->session->flashdata('regis_success') ?> </div>
                    <?php } ?>
                    <table align="center" class="tablelistmhs mb-5">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tema KP</th>
                                <th>Dosen Pembimbing</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data->result_array() as $i):
                                    $id = $i['id'];
                                    $nama = $i['nama'];
                                    $judul = $i['judul'];
                                    $dosbing = $i['Dosen_Pembimbing'];
                            ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $nama; ?></td>
                                    <td><?php echo $judul; ?></td>
                                    <td><?php echo $dosbing; ?></td>
                                    <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="CKoor/nullMhs" method="POST">
                                            <input type="hidden" id="idDelete" name="iddelete" value="<?php echo $id ?>">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Daftarkan Mahasiswa ke Dosbing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="ckoor/add" method="POST">
                    <div class="modal-body">
                        <div class="form-group row-fluid">
                            <label>Mahasiswa</label>
                            <select class="form-control" id="daftarDosbingMhs" name="daftardosbingmhs">
                                <?php
                                    foreach($datamhsnone->result_array() as $j):
                                        $id = $j['id'];
                                        $nama = $j['nama'];
                                ?>
                                <option value="<?php echo $id ?>"><?php echo $nama ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row-fluid">
                            <label>Dosen Pembimbing</label>
                            <select class="form-control" id="daftarDosbingLess" name="daftardosbingless">
                                <?php
                                    foreach($datadosbingless->result_array() as $j):
                                        $id = $j['id'];
                                        $nama = $j['nama'];
                                ?>
                                <option value="<?php echo $id ?>"><?php echo $nama ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </body>
    <script>
</html>