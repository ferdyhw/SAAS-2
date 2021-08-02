            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Halaman Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Halaman Info</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body text-center">WALI KELAS</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <p class="small text-white">Mrs. Yanti</p>
                                        <div class="small text-white"><i class="fas fa-address-card"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body text-center">SEKSI ABSENSI</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <p class="small text-white">Andi Ramli Hidayat</p>
                                        <div class="small text-white"><i class="fas fa-address-card"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body text-center">WAKIL SEKSI ABSENSI</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <p class="small text-white">Fikrie Widhiantoro</p>
                                        <div class="small text-white"><i class="fas fa-address-card"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-info-circle mr-1"></i>Bio Kelas</div>
                                    <div class="card-body text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    <canvas id="myAreaChart" width="100%" height="0"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Daftar Siswa Kelas XI - SIJA B</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th style="padding-right: 0">No</th>
                                                <th>Nama</th>
                                                <th>NIS</th>
                                                <th>Kelas</th>
                                                <th>L/P</th>
                                            </tr>
                                        </thead>                                
                                        <tbody style="text-align: center;">
                                        <?php foreach( $siswa as $swa) : ?>                    
                                            <tr>
                                                <td><?= $swa['id_siswa']; ?></td>
                                                <td><?= $swa['nama']; ?></td>
                                                <td><?= $swa['nis']; ?></td>
                                                <td><?= $swa['kelas']; ?></td>
                                                <td><?= $swa['jenis_kelamin'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>