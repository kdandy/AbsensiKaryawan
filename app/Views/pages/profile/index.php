<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/logo/bhp.png" alt="logo" width="74">
                    <div class="ml-2">
                        User Account
                        <div class="page-title-subheading">Sistem absensi karyawan RSIA Buah Hati Pamulang.
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
                            <h2>PROFILE</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="/assets/logo/profil2.png" class="img-fluid" width="700" alt="banner" loading="lazy">
                            </div>
                            <div class="col-lg-9">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nik</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nik">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Karyawan</label>
                                    <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Telephone</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Agama</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Agama">
                                </div>
                                <div>
                                <label for="exampleInputemail1">Status Karyawan</label>
                                <select class="form-control">
                                    <option>PILIH</option>
                                    <option>PERCOBAAN</option>
                                    <option>KONTRAK</option>
                                    <option>TETAP</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status Tinggal</label>
                                    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status Tinggal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Golongan Darah</label>
                                    <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Golongan Darah">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Warga Negara</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Warga Negara">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputemail1">Ktp</label>
                                    <input type="number" class="form-control" id="exampleInputemail1" placeholder="Enter Ktp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputemail1">Npwp</label>
                                    <input type="number" class="form-control" id="exampleInputemail1" placeholder="Enter Npwp">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputemail1">Divisi</label>
                                <select class="form-control">
                                    <option>PILIH</option>
                                    <option>IT</option>
                                    <option>KEUANGAN</option>
                                    <option>DOKTER</option>
                                    <option>MANAGER</option>
                                    <option>DIREKTUR</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputemail1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputemail1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">
                                    <i class="fas fa-edit"></i>
                                        Edit
                                </button>
                                <a href="/index.php" class="btn btn-danger btn-icon-split">
                                    <i class="metismenu-icon pe-7s-back-2"></i>
                                        <span class="text">Kembali</span>
                                </a>
                            </form>
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