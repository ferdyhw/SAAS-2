<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= base_url('user/seksi') ?>"><i class="fas fa-fw fa-school fa-lg mb-1"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span>Absensi SMK 1</span></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"><i class="fas fa-bars fa-lg"></i>
            </button>

            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <div class="input-group-append">
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-600 text-white small"><?= $user['nama'] ?></span>
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="nav-link p-0 small" href="<?= base_url('user/editProfile'); ?>"><button type="button" class="dropdown-item"><i class="fas fa-user"></i> Ubah Profile</button></a>
                        <a class="nav-link p-0 small" href="<?= base_url('user/editPassword'); ?>"><button type="button" class="dropdown-item"><i class="fas fa-key"></i> Ubah Password</button></a>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item small" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-sign-out-alt"></i> Logout</button>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Yakin ingin logout ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                <a href="<?= base_url('auth/logout') ?>"><button type="button" class="btn btn-primary"><i class="fas fa-check"></i> Yakin</button></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="profileLabel" aria-hidden="true">
          <div class="modal-dialog mt-1 mb-0" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="profileLabel">Setting Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= base_url('user/seksi'); ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">                
                  <div class="form-group">
                    <label for="nama" class="small">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" required value="<?= $user['nama'] ?>">
                    <label for="email" class="small">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $user['email'] ?>" readonly>
                    <label for="email" class="small">Foto</label>
                    <div class="custom-file mt-0">
                      <input type="file" class="custom-file-input" name="foto" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                      <img class="img-thumbnail mt-1" style="width: 150px" class="mt-2" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>"></img>
                      <div class="form-group">
                      <label for="bio" class="small mt-1">Bio</label>
                      <textarea id="bio" name="bio" class="form-control"><?= $user['bio']; ?></textarea></div>
                      </div>
                    </div>
              </div>
              <div class="modal-footer" style="margin-top: 10%;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
              </div>
            </form>
            </div>
          </div>
        </div>