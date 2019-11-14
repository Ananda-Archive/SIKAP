<div class="container-fluid">
            <div class="row d-flex justify-content-center my-5">
                <div class="col-11 list-box px-5">
                    <div class="list-box-header mt-5 mb-2 text-center">
                        PROFIL DOSEN PEMBIMBING
                    </div>
                    <hr>
                    <div class="dosen-profile">
                        <h3>Nama&ensp;: <?php echo $this->session->userdata('nama'); ?></h3>
                        <h3>NIP&ensp;&ensp;&ensp;: <?php echo $this->session->userdata('id'); ?></h3>
                        <h3>Peran&ensp;: <?php 
                            if($this->session->userdata('level') == 2) {
                                echo "Koor";
                            } else {
                                echo "Dosen Pembimbing";
                            }
                        ?></h3>
                    </div>
                    <table align="center" class="tablelist mb-5">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($datamhsdosbing->result_array() as $i):
                                    $id = $i['id'];
                                    $nama = $i['nama'];
                            ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $nama; ?></td>
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