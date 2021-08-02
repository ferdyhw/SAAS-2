<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?= base_url('user'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                Edit Akun
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="<?= base_url('user/editProfile'); ?>">Ubah Profile</a>
                                        <a class="nav-link" href="<?= base_url('user/editPassword'); ?>">Ubah Password</a>
                                    </nav>
                                </div>
                            <div class="sb-sidenav-menu-heading">Absensi</div>
                            <a class="nav-link" href="<?= base_url('absensi/kehadiran_siswa') ?>">
                                <div class="sb-nav-link-icon"><i class="far fa-calendar-check"></i></div>
                                KehadiranKu</a>
                            <div class="sb-sidenav-menu-heading">More</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#lainnya" aria-expanded="false" aria-controls="lainnya"
                                ><div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Lainnya
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="lainnya" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">                                        
                                        <a class="nav-link" href="<?= base_url('absensi/info') ?>">Struktur Kelas</a>
                                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="<?= base_url('auth/logout') ?>">Logout</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?= $role['role'] ?>
                    </div>
                </nav>
            </div>
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