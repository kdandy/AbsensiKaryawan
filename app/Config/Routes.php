<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// CORE
$routes->get('/', 'Home::index');

// LOGIN
$routes->get('/login', 'Login::index');
$routes->post('/login/submit', 'Login::submit');
$routes->get('/logout', 'Login::logout');

// DATA KARYAWAN
$routes->get('/karyawan', 'DataKaryawan::index');
//TAMBAH KARYAWAN
$routes->get('/tambahkaryawan','Datakaryawan::tambah');
$routes->add('/karyawan/add','Datakaryawan::prosesTambah');
// EDIT KARYAWAN
$routes->get('/editkaryawan/(:segment)','Datakaryawan::edit/$1');
// PROSES EDIT KARYAWAN
$routes->add('/proseseditkaryawan/(:segment)','Datakaryawan::prosesEdit/$1');
// DETAIL KARYAWAN
$routes->get('/detailkaryawan/(:segment)','Datakaryawan::detail/$1');
// DELETE KARYAWAN
$routes->get('/deletekaryawan/(:segment)', 'Datakaryawan::delete/$1');

//DATA DIVISI
$routes->get('/divisi','Datadivisi::index');
//TAMBAH DATA DIVISI
$routes->get('/tambahdivisi','Datadivisi::tambah');
//DETAIL DATA DIVISI
$routes->get('/detaildivisi/(:segment)','Datadivisi::detail/$1');
//EDIT DATA DIVISI
$routes->get('/editdivisi/(:segment)','Datadivisi::edit/$1');
//PROSES EDIT DIVISI
$routes->add('/proseseditdivisi/(:segment)','Datadivisi::prosesEdit/$1');
//DELETE DATA DIVISI
$routes->get('/deletedivisi/(:segment)','Datadivisi::delete/$1');

// MASTER FINGER
// SELECT FINGER
$routes->get('/selectfinger','Masterfinger::index');
// TAMBAH FINGER
$routes->get('/tambahfinger','Masterfinger::tambah');
// EDIT FINGER
$routes->get('/editfinger','Masterfinger::edit');
// DETAIL FINGER
$routes->get('/detailfinger/(segment)','Masterfinger::detail/$1');
// DELETE SELECT FINGER
$routes->get('/deletefinger/(:segment)', 'MasterFinger::delete/$1');


// DATA FINGER
$routes->get('/datafinger','Masterfinger::index2');
// DETAIL FINGER
$routes->get('/detaildatafinger','Masterfinger::detail2');


//DATA ROLES
$routes->get('/roles','datarole::index');
//DETAIL ROLES
$routes->get('/detailroles/(:segment)','datarole::detail/$1');
//DELETE ROLES
$routes->get('deleterole/(::segment)', 'datarole::delete/1');


// USER ACCOUNT
$routes->get('/profile','ProfilKaryawan::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
