        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 mt-3">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Masuk</h3></div>
                                    <div class="card-body pb-0">
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <form method="post" action="<?= base_url('auth'); ?>">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" id="email" name="email" type="text" placeholder="Masukan Email" value="<?= set_value('email'); ?>" />
                                            <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="password" name="password" type="password" placeholder="Masukan Password" />
                                            <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                                            </div>                    
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-1">
                                            <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                                            </div>
                                        </form>
                                        <center class="pb-3"><a href="<?= base_url('auth/signup')  ?>" class="small">Belum punya akun? Daftar</a></center>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">SMK BISA | SMK HEBAT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto shadow-lg">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <strong>Absensi SMKN 1 Cimahi 2020</strong></div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">smkn1-cmi.sch.id</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>