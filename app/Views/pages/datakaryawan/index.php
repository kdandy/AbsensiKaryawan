<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/dashboard/assets/images/data.jpg" width="120" alt="">
                    <div class="ml-2">
                        <h2>DATA KARYAWAN</h2>
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
                <a href="/tambahkaryawan" class="btn btn-primary btn-icon-split mb-2 ">
                    <span class="icon text-white-50">
                        <i class="metismenu-icon pe-7s-add-user"></i>
                    </span>
                    <span class="text">Tambah Karyawan</span>
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
                                    <div class="table-responsive">
                                        <table id="table_karyawan" class="table nowrap table-striped table-hover display" width="100%">
                                            <thead class="bg-primary text-white">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Nik </th>
                                                <th>Nama Karyawan</th>
                                                <th>Divisi</th>
                                                <th>Aktif</th>
                                                <th>Aksi</th>
                                            </tr>
                                                </thead>
                                            <tbody class="bg-white text-black">
                                                <?php $i = 1; ?>
                                                <?php foreach($user as $data) : ?>
                                                    <tr>
                                                        <td class="text-center"><?= $i++ ?></td>
                                                        <td><?= $data['nik'] ?></td>
                                                        <td><?= $data['username'] ?></td>
                                                        <td><?= $data['nama_divisi'] ?></td>
                                                        <td>
                                                            <?php if($data['is_active'] == true) { ?>
                                                                <div class="badge badge-success">AKTIF</div>
                                                            <?php } else { ?>
                                                                    <div class="badge badge-danger">INAKTIF</div>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <a href="/deletekaryawan/<?= $data['id_users']; ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-white btn-icon-split mb-2 "> 
                                                                    <i class="fas fa-trash text-danger cursor"></i>
                                                            </a>
                                                            <a href="/detailkaryawan/<?= $data['id_users'] ?>" class="btn btn-white btn-icon-split mb-2 ">         
                                                                    <i class="fas fa-list text-success mr-1 ml-1 cursor" ></i>
                                                            </a>
                                                            <a href="/editkaryawan/<?= $data['id_users'] ?>" class="btn btn-white btn-icon-split mb-2 ">
                                                                    <i class="fas fa-edit text-info cursor"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
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