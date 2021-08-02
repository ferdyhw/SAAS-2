            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Akun</h1>
                        <?= $this->session->flashdata('pesan-berhasil'); ?>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('user/admin'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Akun</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form method="post" action="<?= base_url('absensi/signup'); ?>">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Nama Lengkap</label><input class="form-control" id="nama-lengkap" name="nama-lengkap" type="text" placeholder="Masukan Nama Lengkap" value="<?= set_value('nama-lengkap'); ?>" />
                                                    <?= form_error('nama-lengkap', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Email</label><input class="form-control" id="email" name="email" type="text" placeholder="Masukan Email" value="<?= set_value('email'); ?>" />
                                                    <?= form_error('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control" id="password1" name="password1" type="password" placeholder="Masukan Password" />
                                                    <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Konfirmasi Password</label><input class="form-control" id="password2" name="password2" type="password" placeholder="Masukan Konfirmasi Password" />
                                                        <?= form_error('password2', '<small class="text-danger pl-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="nip">NIP</label><input class="form-control" id="nip" name="nip" type="number" placeholder="Masukan NIP (Untuk Guru)" />
                                                        <?= form_error('nip', '<small class="text-danger pl-2">', '</small>'); ?>
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="nis">NIS</label><input class="form-control" id="nis" name="nis" type="number" placeholder="Masukan NIS (Untuk Siswa)" />
                                                        <?= form_error('nis', '<small class="text-danger pl-2">', '</small>'); ?>
                                                      </div>
                                                </div>                                                
                                                <div class="col-md-6">
                                                    <div class="form-group py-2">
                                                        <label class="small mb-1" for="role_id">Type Akun</label>
                                                        <select name="role_id" class="form-control" id="role_id" required>
                                                          <option disabled selected>Pilih Type...</option>
                                                          <option value="1">Admin</option>
                                                          <option value="2">Wali Kelas</option>
                                                          <option value="3">Seksi Absensi</option>
                                                          <option value="4">Siswa</option>
                                                        </select>
                                                        <?= form_error('role_id', '<small class="text-danger pl-2">', '</small>'); ?>
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group py-2">
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
                                            <div class="form-group mt-0"><button class="btn btn-primary btn-block" type="submit" name="signup">SignUp</button></div>
                                        </form>
                            </div>
                        </div>
                </main>