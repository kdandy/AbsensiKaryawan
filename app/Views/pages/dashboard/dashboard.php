<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/logo/bhp.png" alt="logo" width="74">
                    <div class="ml-2">
                        Dashboard
                        <div class="page-title-subheading">Sistem absensi karyawan RSIA Buah Hati Pamulang.
                        </div>
                    </div>
                </div> 
            </div>
        </div>            
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Jumlah Karyawan</div>
                            <div class="widget-subheading">RSIA Buah Hati Pamulang</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>50</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Jumlah Absensi Masuk</div>
                            <div class="widget-subheading">RSIA Buah Hati Pamulang</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>100</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-grow-early">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Jumlah Absensi Keluar</div>
                            <div class="widget-subheading">RSIA Buah Hati Pamulang</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>100</span></div>
                        </div>
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
                            PROFIL RSIA BUAH HATI PAMULANG
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="/assets/dashboard/assets/images/rsia.jpg" class="img-fluid" width="700" alt="banner" loading="lazy">
                            </div>
                            <div class="col-lg-9">
                                <p style="line-height: 22px"><h5><strong>RSIA BUAH HATI PAMULANG</strong></h5> <h4> Terletak di sebelah kiri komplek perumahan villa dago pamulang. berdiri pada Tanggal 19 April 2011 dan beralamat di Jalan Raya Siliwangi No. 189 Benda baru Pamulang, Tangerang Selatan.
                                RSIA BUAH HATI berdiri pada tahun 2005 di Jl.Aria Putra No. 399 Ciputat, yang Berangkat dari Klinik praktek Dokter bersama di RSIA BUAH HATI CIPUTAT. Karena semakin berkembangnya kesadaran akan kebutuhan masyarakat 
                                untuk memperoleh pelayanan kesehatan yang lebih baik dan lengkap mendorong konsorsium dokter-dokter spesialis untuk mengembangkan RSIA BUAH HATI menjadi salah satu rumah sakit pilihan masyarakat yang akhirnya menjadi cikal bakal terbentuknya RSIA BUAH HATI PAMULANG. </h4></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <hr/>
                                <h6 class="font-weight-bold">VISI</h6>
                                    <p>RSIA Buah Hati Pamulang sebagai rumah sakit dengan mutu pelayanan berkualitas, terpadu dan kekeluargaan. </p>
                                <h6 class="font-weight-bold">MISI</h6>
                                    <ol>
                                        <li> 
                                            <p>Menyediakan program pencegahan, pengobatan dan perawatan dengan memperhatikan keselamatan dan keamanan pasien dan tenaga kerja. </p>
                                        </li>
                                        <li>
                                            <p>Mengutamakan inovasi dan profesionalisme dalam pelayanan. </p>
                                        </li>
                                        <li>
                                            <p>Memberikan Pelayanan prima, mudah, ramah, cepat, tepat dan tanggap. </p>
                                        </li>
                                        <li> 
                                            <p>Meningkatkan Mutu, Kompetensi dan kesejahteraan SDM secara berkelanjutan. </p>
                                        </li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>