<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>RSIA Buah Hati Pamulang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="/assets/dashboard/main.css" rel="stylesheet">
    <!-- TOASTR -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="icon" type="image/png" href="/assets/logo/bhp.png"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="/jquerydatatables/jquery.dataTables.min.css">

</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- HEADER -->
            <?= $this->include('pages/layout/dashboard/header') ?>
        <!-- END HEADER -->
                    
        <div class="app-main">
            <!-- SIDEBAR -->
            <?= $this->include('pages/layout/dashboard/sidebar') ?>
            <!-- END SIDEBAR -->
            <div class="app-main__outer">
            <!-- CONTENT UTAMA -->
            <?= $this->renderSection('content') ?>
            <!-- END CONTENT UTAMA -->

            <!-- FOOTER -->
            <?= $this->include('pages/layout/dashboard/footer') ?>
            <!-- END FOOTER -->
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>

    <script src="/assets/dashboard/assets/scripts/jquery.3.2.1.min.js"></script>
    <script type="text/javascript" src="/assets/dashboard/assets/scripts/main.js"></script>

    <!-- DATATABLES -->
    <script type="text/javascript" charset="utf8" src="/jquerydatatables/jquery.dataTables.min.js"></script>

    <script>
        // UNTUK TABLE KARYAWAN
        $(document).ready( function () {
            $('#table_karyawan').DataTable();
        });

        // UNTUK TABLE DIVISI
        $(document).ready( function () {
            $('#table_divisi').DataTable();
        });
    </script>

    <!-- TOASTR -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        <?php if(session()->get('success')){ ?>
            toastr.success("<?= session()->get('success'); ?>");
        <?php }else if(session()->get('error')){  ?>
            toastr.error("<?= session()->get('error'); ?>");
        <?php }else if(session()->get('warning')){  ?>
            toastr.warning("<?= session()->get('warning'); ?>");
        <?php }else if(session()->get('info')){  ?>
            toastr.info("<?= session()->get('info'); ?>");
        <?php } ?>
    </script>
</body>
</html>
