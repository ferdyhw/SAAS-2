            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Kehadiran Siswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kehadiran Siswa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Absensi <?= $user['nama']  ?> <?= $user['kelas'] ?></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th style="padding-right: 0">No</th>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>NIS</th>
                                                <th>Kehadiran</th>
                                                <th>Keterangan</th>                                                
                                            </tr>
                                        </thead>                                
                                        <tbody style="text-align: center;">
                                            <?php foreach( $absensi as $abs) : ?>
                                            <tr>
                                                <td><?= $abs['id_siswa']; ?></td>
                                                <td><?= $abs['tanggal']; ?></td>
                                                <td><?= $abs['nama']; ?></td>
                                                <td><?= $abs['nis']; ?></td>
                                                <td><?= $abs['kehadiran'] ?></td>
                                                <td><?= $abs['keterangan'] ?></td> 
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>