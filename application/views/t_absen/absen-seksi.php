            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Table Absensi</h1>
                        <?= $this->session->flashdata('pesan'); ?>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('user/seksi'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Table Absensi</li>
                        </ol>                        
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Daftar Siswa Kelas XI - SIJA B                        
                            </div>
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

                                  <?php if( empty($siswa) ) : ?>
                                    <h5 class="text-danger">Keyword/Data Tidak Ditemukan</h5>
                                  <?php endif; ?>
                                  
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="text-align: center;">
                                            <tr>
                                                <th style="padding-right: 0">No</th>
                                                <th>Nama</th>
                                                <th>NIS</th>
                                                <th>Kelas</th>                                               
                                                <th>Kehadiran</th>                            
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center;">
                                        <?php foreach($siswa as $swa) : ?>
                                            <tr>
                                                <td><?= $swa['id_siswa'] ?></td>
                                                <td><?= $swa['nama'] ?></td>
                                                <td><?= $swa['nis'] ?></td>
                                                <td><?= $swa['kelas'] ?></td>
                                                <td>   
                                                <h5><button data-toggle="modal" data-target="#Absensi<?= $swa['id_siswa'] ?>" class="badge badge-info" style="font-family: sans-serif;">Absen</button></h5>
                                                </td>
                                            </tr>  
                                            <?php endforeach; ?>                                      
                                        </tbody>
                                    </table>
                                    <!-- <button type="submit" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#Absensi">Masukan Absen</button> -->                                    
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>                
                <!-- Modal --> 
                <?php foreach($siswa as $swa) : ?>              
                  <div class="modal fade" id="Absensi<?= $swa['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="AbsensiLabel<? $swa['id_siswa'];?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="AbsensiLabel">Konfirmasi Absensi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      <form class="form-horizontal" action="<?php echo base_url('absensi/seksi')?>" method="post" enctype="multipart/form-data" role="form">
                       <div class="modal-body">
                          <div class="form-group">
                            <input type="hidden" name="id_siswa" value="<?= $swa['id_siswa'] ?>" readonly>
                           <label class="control-label small">Nama</label>                                   
                               <input type="text" class="form-control" value="<?= $swa['nama'] ?>" id="nama" name="nama" readonly>
                          <label class="control-label small">NIS</label>                                   
                               <input type="text" class="form-control" value="<?= $swa['nis'] ?>" id="nis" name="nis" readonly>
                           <label class="control-label small mt-2">Kehadiran</label>
                               <select name="absensi" class="form-control">
                                  <option value="hadir">Hadir</option>
                                  <option value="alpa">Alpa</option>
                                  <option value="izin">Izin</option>
                                  <option value="sakit">Sakit</option>
                               </select>
                            <label class="control-label small mt-2">Keterangan</label>
                               <input class="form-control" type="text" name="keterangan" placeholder="Masukan Keterangan Jika Ada">
                            <label class="control-label small mt-2">Tanggal Hari Ini</label>
                                <input type="date" name="tanggal" class="form-control" required>
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
