        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Halaman Seksi Absensi</h1>
                        <?= $this->session->flashdata('pesan'); ?>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>                            
                        </ol>
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"><?= $user['nama']; ?></h5>
                                <p class="card-text"><?= $user['email']; ?></p>
                                <p class="card-text"><?= $user['nis']; ?></p>
                                <p class="card-text"><small class="text-muted">Dibuat Pada <?= $user['tanggal']; ?></small></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-info-circle mr-1"></i>Bio User</div>
                                    <div class="card-body text-justify pb-5">
                                        <?= $user['bio']; ?>
                                    <canvas id="myAreaChart" width="100%" height="0"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>                                                                        