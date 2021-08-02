            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Siswa</h1>
                        <?= $this->session->flashdata('pesan-berhasil'); ?>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('user/admin'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Siswa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="" method="post" autocomplete>
                                    <div class="form-group"><label class="small mb-1" for="nama">Nama Lengkap Siswa</label><input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama Lengkap Siswa" value="<?= set_value('nama') ?>" /><small class="text-danger"><?= form_error('nama'); ?></small></div>
                                    <div class="form-group"><label class="small mb-1" for="nis">Nomer Induk Siswa</label><input class="form-control" id="nis" name="nis" type="text" placeholder="Masukan NIS Siswa" value="<?= set_value('nis') ?>" /><small class="text-danger"><?= form_error('nis'); ?></small></div>
                                    <div class="form-group"><label class="small mb-1" for="nisn">Kelas</label>
                                        <select name="kelas" class="form-control" id="role_id" required>
                                            <option disabled selected>Pilih Kelas...</option>
                                            <option value="XI - SIJA A">XI - SIJA A</option>
                                            <option value="XI - SIJA B">XI - SIJA B</option>
                                        </select>
                                        <small class="text-danger"><?= form_error('kelas'); ?></small></div>
                                    <div class="mb-2">
                                    <div class="form-group"><label class="small mb-1" for="nisn">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="role_id" required>
                                            <option disabled selected>Pilih Jenis Kelamin...</option>
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    <small class="text-danger"><?= form_error('jenis_kelamin'); ?></small></div>
                                    <div class="form-group mt-0">
                                        <button class="btn btn-primary btn-block" type="submit" name="tambah">Submit</button>
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                </main>