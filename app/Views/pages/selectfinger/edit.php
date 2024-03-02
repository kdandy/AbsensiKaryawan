<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
<?php $validation = \Config\Services::validation(); ?>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/dashboard/assets/images/tambah.jpg" width="180" alt="">
                    <div class="ml-2">
                        <h2>EDIT DATA KARYAWAN</h2>
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
                                    <div class="table-responsive">
                                    <form>
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">IP ADDRESS</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                         <i class="metismenu-icon pe-7s-note"></i>
                                             Edit
                                    </button>
                                    <a href="/selectfinger" class="btn btn-danger btn-icon-split">
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
    </div>
<?= $this->endSection() ?>