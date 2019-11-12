<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-11 list-box px-5">
                    <div class="list-box-header mt-5 mb-2">
                        TEMA KP
                        <div class="addDosenPembimbing">
                            <a href="addKp">
                                <button type="button" class="btn btn-success" >Tambah Tema KP</button>
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
                                <th>id</th>
                                <th>Tema KP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($datalistkp->result_array() as $i):
                                    $id = $i['id'];
                                    $judul = $i['judul'];
                            ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $judul; ?></td>
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