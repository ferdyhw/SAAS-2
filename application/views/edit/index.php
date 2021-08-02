            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Akun</h1>
                        <?= $this->session->flashdata('pesan'); ?>
                        <ol class="breadcrumb mb-4">                            
                            <li class="breadcrumb-item active">Ubah Password</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="" method="post" autocomplete>
                                    <h4>Edit Password</h4>
                                    <div class="form-group">
                                        <label class="small mb-1" for="passwordlama">Passoword Lama</label>
                                        <input class="form-control" id="passwordlama" name="passwordlama" type="password" placeholder="Masukan Password Lama" value="<?= set_value('passwordlama') ?>" /><small class="text-danger"><?= form_error('passwordlama'); ?></small></div>
                                        <div class="form-group">
                                        <label class="small mb-1" for="password1">Passoword Baru</label>
                                        <input class="form-control" id="password1" name="password1" type="password" placeholder="Masukan Password Baru" value="<?= set_value('password1') ?>" /><small class="text-danger"><?= form_error('password1'); ?></small></div>
                                        <div class="form-group">
                                        <label class="small mb-1" for="password2">Konfirmasi Passoword Baru</label>
                                        <input class="form-control" id="password2" name="password2" type="password" placeholder="Masukan Konfirmasi Password Baru" value="<?= set_value('password2') ?>" /><small class="text-danger"><?= form_error('password2'); ?></small></div>
                                        <div class="form-group mt-0">
                                        <button class="btn btn-primary btn-block" type="submit" name="tambah"><i class="fas fa-check"></i> Submit</button>
                                    </div>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                </main>