            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Kehadiran Siswa</h1>
                        <?= $this->session->flashdata('pesan'); ?>
                         <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('user/admin'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kehadiran Siswa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Table Absensi Siswa</div>
                            <div class="card-body">
                                <div class="table-responsive">

                                 <form method="post" action="" autocomplete>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text mb-3"><i class="fas fa-search"></i></div>
                                      </div>
                                      <input type="text" class="form-control mb-3" name="keyword" placeholder="Keyword Pencarian...">
                                      <button type="submit" class="btn btn-primary mb-3" style="border-radius: 0" name="cari">Search</button>
                                    </div>
                                  </form>

                                  <?php if( empty($absensi) ) : ?>
                                    <h5 class="text-danger">Keyword/Data Tidak Ditemukan</h5>
                                  <?php endif; ?>

                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th style="padding-right: 0">No</th>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>NIS</th>
                                                <th>Kehadiran</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>                                
                                        <tbody style="text-align: center;">
                                        <?php foreach( $absensi as $swa) : ?>
                                            <tr>
                                                <td><?= $swa['id_siswa']; ?></td>
                                                <td><?= $swa['tanggal']; ?></td>
                                                <td><?= $swa['nama']; ?></td>
                                                <td><?= $swa['nis']; ?></td>
                                                <td><?= $swa['kehadiran']; ?></td>
                                                <td><?= $swa['keterangan']; ?></td>
                                                <td>
                                                <h5>
                                                <button data-toggle="modal" data-target="#Absensi<?= $swa['id_absen'] ?>" class="badge badge-info" style="font-family: sans-serif;">Edit</button>
                                                <button data-toggle="modal" data-target="#Hapus<?= $swa['id_absen'] ?>" class="badge badge-danger" style="font-family: sans-serif;">Hapus</button>
                                                </h5>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Modal Hapus -->
                <?php foreach($absensi as $swa) : ?>
                <div class="modal fade" id="Hapus<?= $swa['id_absen'];?>" tabindex="-1" role="dialog" aria-labelledby="HapusLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="HapusLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="<?= base_url('absensi/hapus') ?>">
                        <input type="hidden" name="id_absen" value="<?= $swa['id_absen'] ?>" readonly>
                        Hapus Absensi <span class="text-danger"><?= $swa['nama'] ?></span> ?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Hapus</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
                <!-- Modal Edit --> 
                <?php foreach($absensi as $swa) : ?>
                  <div class="modal fade" id="Absensi<?= $swa['id_absen'];?>" tabindex="-1" role="dialog" aria-labelledby="AbsensiLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="AbsensiLabel">Edit Absensi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      <form class="form-horizontal" action="<?php echo base_url('absensi/kehadiran')?>" method="post" enctype="multipart/form-data" role="form">
                       <div class="modal-body">
                          <div class="form-group">
                            <input type="hidden" name="id_absen" value="<?= $swa['id_absen'] ?>" readonly>
                            <input type="hidden" name="id_siswa" value="<?= $swa['id_siswa'] ?>" readonly>
                           <label class="control-label small">Nama</label>                                   
                               <input type="text" class="form-control" value="<?= $swa['nama'] ?>" id="nama" name="nama" readonly>
                           <label class="control-label small">NIS</label>                                   
                               <input type="text" class="form-control" value="<?= $swa['nis'] ?>" id="nis" name="nis" readonly>
                           <label class="control-label small mt-2">Kehadiran</label>
                               <select name="absensi" class="form-control">
                                  <option<?php if ($swa['kehadiran'] == "hadir"): ?> selected="selected"<?php endif; ?>>Hadir</option>
                                  <option<?php if ($swa['kehadiran'] == "alpa"): ?> selected="selected"<?php endif; ?>>Alpa</option>
                                  <option<?php if ($swa['kehadiran'] == "izin"): ?> selected="selected"<?php endif; ?>>Izin</option>
                                  <option<?php if ($swa['kehadiran'] == "sakit"): ?> selected="selected"<?php endif; ?>>Sakit</option>
                               </select>
                            <label class="control-label small mt-2">Keterangan</label>
                               <input class="form-control" type="text" value="<?= $swa['keterangan'] ?>" name="keterangan" placeholder="Masukan Keterangan Jika Ada">
                            <label class="control-label small mt-2">Tanggal Hari Ini</label>
                                <input type="date" name="tanggal" class="form-control" value="<?= $swa['tanggal'] ?>" required>
                                <?= form_error('tanggal', '<small class="text-danger pl-2">', '</small>'); ?>
                       </div>
                   </div>
                   <div class="modal-footer">                       
                       <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Batal </button>
                       <button class="btn btn-primary" type="submit"><i class="fas fa-check"></i> Kirim </button>
                   </div>
                  </form>                
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>                