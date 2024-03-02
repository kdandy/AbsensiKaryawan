<?= $this->extend('pages\layout\dashboard\template') ?>

<?= $this->section('content') ?>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <img src="/assets/logo/select.jpg" width="180" alt="">
                    <div class="ml-2">
                        <h2>DATA ROLE </h2>
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
                                    <table id="#" class="table nowrap table-striped table-hover display" width="100%">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                            <th>No</th>
                                            <th>Nama Role</th>
                                            <th>Deskripsi</th>
                                            <th>Aktif</th>
                                            <th>Aksi</th>
                                        </tr>
                                            </thead>
                                        <tbody class="bg-white text-black">
                                            <?php $i = 1; ?>
                                            <?php foreach($role as $data) : ?>
                                                <tr>
                                                    <td class="text-center"><?= $i++ ?></td>
                                                    <td><?= $data['nama_role'] ?></td>
                                                    <td><?= $data['deskripsi_role'] ?></td>
                                                    <th class="badge badge-success">Aktif</th>
                                                    <td>
                                                    <a href="/deleteroles/<?= $data['id_role']; ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-white btn-icon-split mb-2 "> 
                                                        <i class="fas fa-trash text-danger cursor"></i>
                                                        </a>
                                                    <a href="/detailroles/<?= $data['id_role'] ?>" class="btn btn-white btn-icon-split mb-2 ">         
                                                        <i class="fas fa-list text-success mr-1 ml-1 cursor" ></i>
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