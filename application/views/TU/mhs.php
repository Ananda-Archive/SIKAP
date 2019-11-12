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
                    <table align="center" class="tablelistmhs mb-5">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tema KP</th>
                                <th>Dosen</th>
                                <th>Nilai</th>
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