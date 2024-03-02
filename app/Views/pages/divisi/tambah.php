<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <!-- VALIDATION PLUGIN -->
    <?php $validation = \Config\Services::validation(); ?>
    
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/dashboard/assets/images/tambah.jpg" width="180" alt="">
                    <div class="ml-2">
                        <h2>TAMBAH DATA DIVISI</h2>
                        <div class="page-title-subheading">RSIA BUAH HATI PAMULANG</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                    </div>
                </div> 
            </div>
        </div>            
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            <i class="fas fa-fingerprint"></i>
                            RSIA BUAH HATI PAMULANG
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <form action="/karyawan/add" method="post">
                                    <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Enter NIK">
                                            <!-- Error -->
                                            <?php if($validation->getError('nik')) {?>
                                                <small class="error-text">
                                                    <?= $error = $validation->getError('nik'); ?>
                                                </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama Karyawan</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                            <!-- Error -->
                                            <?php if($validation->getError('name')) {?>
                                                <small class="error-text">
                                                    <?= $error = $validation->getError('name'); ?>
                                                </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">No HP</label>
                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                                            <!-- Error -->
                                            <?php if($validation->getError('phone')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('phone'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">
                                            <!-- Error -->
                                            <?php if($validation->getError('agama')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('agama'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="status_tinggal">Status Tinggal</label>
                                            <input type="text" class="form-control" id="status_tinggal" name="status_tinggal" placeholder="Status Tinggal">
                                            <!-- Error -->
                                            <?php if($validation->getError('status_tinggal')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('status_tinggal'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="gol_darah">Golongan Darah</label>
                                            <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Golongan Darah">
                                            <!-- Error -->
                                            <?php if($validation->getError('gol_darah')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('gol_darah'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="warga">Warga Negara</label>
                                            <input type="text" class="form-control" id="warga" name="warga" placeholder="Warga Negara">
                                            <!-- Error -->
                                            <?php if($validation->getError('warga')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('warga'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="ktp">No KTP</label>
                                            <input type="text" class="form-control" id="ktp" name="ktp" placeholder="Nomor Ktp">
                                            <!-- Error -->
                                            <?php if($validation->getError('ktp')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('ktp'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="npwp">No Npwp</label>
                                            <input type="text" class="form-control" id="npwp" name="npwp" placeholder="Nomor Npwp">
                                            <!-- Error -->
                                            <?php if($validation->getError('npwp')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('npwp'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="divition">Divisi</label>
                                            <select class="form-control" id="divition" name="divition">
                                                <option value="">PILIH</option>
                                                <?php foreach($divisi as $data) : ?>
                                                    <option value="<?= $data['id_divisi'] ?>"><?= $data['nama_divisi'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <!-- Error -->
                                            <?php if($validation->getError('divition')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('divition'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                            <!-- Error -->
                                            <?php if($validation->getError('address')) {?>
                                                    <small class="error-text">
                                                        <?= $error = $validation->getError('address'); ?>
                                                    </small>
                                            <?php }?>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">
                                            <i class="fas fa-plus"></i>
                                                Tambah
                                        </button>
                                        <a href="/divisi" class="btn btn-danger btn-icon-split">
                                                <i class="metismenu-icon pe-7s-back-2"></i>
                                            <span class="text">Kembali</span>
                                        </a>
                                    </form>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>