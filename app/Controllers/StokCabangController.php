<?php

// namespace App\Controllers;
// use App\Models\MStokCabang;

// class StokCabangController extends RestfulController
// {
//     public function cekprodukbycabang(){
//         {
//             $model = new MStokCabang();
//             // $cabang = $model->findAll();
//             $cabang = $model->select(['idcabang', 'idproduk'])->findAll();
//             return $this->responseHasil(200, true, $cabang);
//         }
//     }
// }

// namespace App\Controllers;

// use App\Models\MStokCabang;

// class StokCabangController extends RestfulController
// {
//     public function cekprodukbycabang()
//     {
//         $idproduk = $this->request->getVar('idproduk'); // Mengambil data dari input GET
//         $idcabang = $this->request->getVar('idcabang'); // Mengambil data dari input GET

//         // Validasi input (opsional)
//         if (empty($idproduk) || empty($idcabang)) {
//             return $this->responseHasil(400, false, "ID Produk atau ID Cabang tidak boleh kosong");
//         }

//         $model = new MStokCabang();
//         $data = $model->where('idproduk', $idproduk)
//                       ->where('idcabang', $idcabang)
//                       ->findAll(); // Query menggunakan query builder

//         if ($data) {
//             return $this->responseHasil(200, true, "OK");
//         } else {
//             return $this->responseHasil(404, false, "Produk tidak ditemukan di cabang tersebut");
//         }
//     }
// }

namespace App\Controllers;

use App\Models\MStokCabang;

class StokCabangController extends RestfulController
{
    public function cekprodukbycabang()
    {
        $idproduk = $this->request->getVar('idproduk'); // Mengambil ID produk dari input GET

        // Validasi input
        if (empty($idproduk)) {
            return $this->responseHasil(400, false, "ID Produk tidak boleh kosong");
        }

        $model = new MStokCabang();
        $data = $model->select('idcabang') // Ambil hanya ID cabang
                      ->where('idproduk', $idproduk)
                      ->findAll();

        if ($data) {
            return $this->responseHasil(200, true, $data); // Kembalikan daftar cabang
        } else {
            return $this->responseHasil(404, false, "Stok tidak ditemukan untuk produk ini");
        }
    }
}
