        <div class="container-fluid vh-100">
            <div class="row vh-100">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <div class="row login-box d-flex justify-content-center align-items-center">
                        <div class="loginText col-12 d-flex justify-content-center">
                            <h1 class="heading-3">Log In</h1>
                        </div>
                        <form class="col-10" action="<?php echo base_url('login/userlogin'); ?>" method="POST">
                            <div class="form-group row">
                                <label>NIM / NIP / NIK</label>
                                <input type="text" class="form-control" name="idlogin" placeholder="Enter NIM / NIP / NIK">
                            </div>
                            <div class="form-group row">
                                <label>Password</label>
                                <input type="password" class="form-control" name="passlogin" placeholder="Enter Password">
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center loginButton">
                                    <button type="submit" class="btn btn-success col-12">Login</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-1">
                                    <?php if ($this->session->flashdata('login_error')) { ?>
                                        <div class="alert alert-danger m-3"> <?= $this->session->flashdata('login_error') ?> </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <p>Belum mempunyai Akun? <a href=" <?php echo base_url('regis') ?>  ">Daftar Disini</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>