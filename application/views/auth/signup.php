        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 mt-2">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Daftar Akun</h3></div>
                                    <div class="card-body pb-0">                                        
                                        <form method="post" action="<?= base_url('auth/signup'); ?>">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Nama Lengkap</label><input class="form-control py-4" id="nama-lengkap" name="nama-lengkap" type="text" placeholder="Masukan Nama Lengkap" value="<?= set_value('nama-lengkap'); ?>" />
                                                    <?= form_error('nama-lengkap', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Email</label><input class="form-control py-4" id="email" name="email" type="text" placeholder="Masukan Email" value="<?= set_value('email'); ?>" />
                                                    <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="password1" name="password1" type="password" placeholder="Masukan Password" />
                                                    <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Konfirmasi Password</label><input class="form-control py-4" id="password2" name="password2" type="password" placeholder="Masukan Konfirmasi Password" />
                                                        <?= form_error('password2', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="nis">NIS</label><input class="form-control py-4" id="nis" name="nis" type="number" placeholder="Masukan NIS" />
                                                        <?= form_error('nis', '<small class="text-danger pl-2">', '</small>'); ?>
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="kelas">Kelas</label>
                                                        <select name="kelas" class="form-control" id="kelas" required>
                                                          <option disabled selected>Pilih Kelas...</option>
                                                          <option value="XI - SIJA A">XI - SIJA A</option>
                                                          <option value="XI - SIJA B">XI - SIJA B</option>
                                                        </select>
                                                        <?= form_error('kelas', '<small class="text-danger pl-2">', '</small>'); ?>
                                                      </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="signup">SignUp</button>
                                            <center><a href="<?= base_url('auth')  ?>" class="small pb-0">Sudah punya akun? Masuk</a></center>
                                            </div>
                                        </form>
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
                                <a href="<?= base_url('user/admin') ?>">Kembali</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>