            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Akun</h1>
                        <?= $this->session->flashdata('pesan'); ?>
                        <ol class="breadcrumb mb-4">                            
                            <li class="breadcrumb-item active">Ubah Profile</li>
                        </ol>                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                         <h4>Edit Profile</h4>
                                              <div class="form-group">
                                                <label for="nama" class="small">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $user['nama'] ?>">
                                                <small class="text-danger"><?= form_error('nama'); ?></small>
                                                <label for="email" class="small">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="<?= $user['email'] ?>" readonly>
                                                <label for="email" class="small">Foto</label>
                                                <div class="custom-file mt-0">
                                                  <input type="file" class="custom-file-input" name="foto" id="customFile">
                                                  <label class="custom-file-label" for="customFile">Choose file</label>
                                                  <img class="img-thumbnail mt-1" style="width: 200px" class="mt-2" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>"></img>
                                                  <div class="form-group">
                                                  <label for="bio" class="small mt-1">Bio</label>
                                                  <textarea id="bio" name="bio" class="form-control"><?= $user['bio']; ?></textarea></div>
                                                  <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-check"></i> Simpan</button>
                                                  </div>
                                                </div>
                                          </div>                                         
                                        </form>
                                        </div>
                                    </div>
                            </main>
                      </div>