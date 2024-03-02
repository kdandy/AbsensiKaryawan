<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <!-- VALIDATION PLUGIN -->
    <?php $validation = \Config\Services::validation(); ?>
    
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/logo/detail.jpg" width="180" alt="">
                    <div class="ml-2">
                        <h2>DETAIL DATA KARYAWAN</h2>
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
            <div class="col-md-12 text-right">
                <a href="#" class="btn btn-primary btn-icon-split mb-2 ">
                    <span class="icon text-white-50">
                        <i class="metismenu-icon pe-7s-print"></i>
                    </span>
                    <span class="text">Cetak</span>
                </a> 
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
                                    <h5 class="text-primary"><strong>NAMA ROLE</strong></h5>
                                    <h7 class="text-dark"><strong><?= $roles[0]['nama_role'] ?></strong></h7>
                                    <h5 class="text-primary mt-3"><strong>DESKRIPSI</strong></h5>
                                    <h7 class="text-dark"><strong><?= $roles[0]['deskripsi_role'] ?></strong></h7>
                                    <a href="/divisi" class="btn btn-danger btn-icon-split mt-4">
                                            <i class="metismenu-icon pe-7s-back-2"></i>
                                        <span class="text">Kembali</span>
                                    </a>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>