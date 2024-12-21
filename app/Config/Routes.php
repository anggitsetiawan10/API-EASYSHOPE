<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kategori', 'KategoriController::list');
$routes->get('/kategoribyproduk', 'KategoriController::kategoribyproduk');
$routes->get('/produkbykategori', 'ProdukController::produkbykategori'); // Route untuk kategori
$routes->get('/cabang', 'CabangController::list'); // Route untuk kategori
$routes->get('/stokcabang', 'StokCabangController::cekprodukbycabang'); // Route untuk kategori

