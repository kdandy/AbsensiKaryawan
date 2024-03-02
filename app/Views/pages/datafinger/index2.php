<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/logo/datafinger.jpg" width="180" alt="">
                    <div class="ml-2">
                        <h2>DATA FINGER </h2>
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
                                    <table id="table_karyawan" class="table nowrap table-striped table-hover display" width="100%">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                            <th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Jam Masuk</th>
                                            <th>Jam Keluar</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                            <tbody class="bg-white text-black">
                                                <tr>
                                                <th>1</th>
                                                <th>Fitri Handayani</th>
                                                <th>08.00</th>
                                                <th>17.00</th>
                                                <th>17.01.2021</th>
                                                <th>17.01.2021</th>
                                                <th>
                                                    <i class="fas fa-trash text-danger cursor"></i>
                                                    <i class="fas fa-list text-success mr-4 ml-4 cursor" ></i>
                                                    <i class="fas fa-edit text-info cursor"></i>
                                                </th>
                                                </tr>
                                            </tbody>
                                        </table>
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