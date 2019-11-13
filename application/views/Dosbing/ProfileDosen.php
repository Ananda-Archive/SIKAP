<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-11 list-box px-5">
                    <div class="list-box-header mt-5 mb-2">
                        DOSEN PEMBIMBING
                        <div class="addDosenPembimbing">
                            <a href="addDosbing">
                                <button type="button" class="btn btn-success" >Tambah Dosen Pembimbing</button>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <?php if ($this->session->flashdata('regis_success')) { ?>
                                            <div class="alert alert-success m-3"> <?= $this->session->flashdata('regis_success') ?> </div>
                    <?php } ?>
                    <table align="center" class="tablelist mb-5">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data->result_array() as $i):
                                    $id = $i['id'];
                                    $nama = $i['nama'];
                                    $level = $i['level'];
                            ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $nama; ?></td>
                                    <td>
                                        <?php
                                            if($level == 1) {
                                                echo "Dosen Pembimbing";
                                            } else {
                                                echo "Koor Dosen Pembimbing";
                                            }
                                        ?>
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