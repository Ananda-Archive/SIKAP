<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-11 list-box px-5">
                    <div class="list-box-header mt-5 mb-2">
                        MAHASISWA
                        <div class="addDosenPembimbing">
                            <a href="addMhs">
                                <button type="button" class="btn btn-success" >Tambah Mahasiswa</button>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <?php if ($this->session->flashdata('regis_success')) { ?>
                                            <div class="alert alert-success m-3"> <?= $this->session->flashdata('regis_success') ?> </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('update_success')) { ?>
                        <div class="alert alert-success m-3"> <?= $this->session->flashdata('update_success') ?> </div>
                    <?php }?>
                    <?php if ($this->session->flashdata('update_failed')) { ?>
                        <div class="alert alert-danger m-3"> <?= $this->session->flashdata('update_failed') ?> </div>
                    <?php }?>
                    <table align="center" class="tablelistmhs mb-5">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tema KP</th>
                                <th>Dosen Pembimbing</th>
                                <th>Nilai</th>
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
                                    $nilai = $i['nilai'];
                            ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $nama; ?></td>
                                    <td><?php echo $judul; ?></td>
                                    <td><?php echo $dosbing; ?></td>
                                    <td class="text-center"><?php echo $nilai; ?></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="updateMhs?id=<?php echo $id ?>;"><button type="button" class="btn btn-dark">Edit</button></a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="tumhs/deleteMhs" method="POST">
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
    </body>
    <script>
</html>