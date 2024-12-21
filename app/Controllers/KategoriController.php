<?php

namespace App\Controllers;

use App\Models\MKategori;

class KategoriController extends BaseController
{
    protected $data;

    public function __construct()
    {
        $this->data = new MKategori();
    }

    public function kategoribyproduk()
    {
        $sData = [];
        $data = $this->data->kategoribyproduk(); // Ambil data dari model

        foreach ($data as $rs) {
            $sData[] = [
                'id' => (int)$rs['idkategori'], // Gunakan notasi array
                'nama' => $rs['nama'], // Gunakan notasi array
            ];
        }

        return $this->response->setJSON($sData); // Mengembalikan data JSON
    }
}




// namespace App\Controllers;
// use App\Models\MKategori;

// class KategoriController extends RestfulController
// {
//     public function list()
//     {
//         $model = new MKategori(); // Menggunakan model yang benar
//         $produk = $model->findAll(); // Memanggil findAll() dari model
//         return $this->responseHasil(200, true, $produk); // Mengembalikan respons dengan responseHasil
//     }
// // }

// // class KategoriController extends BaseController
// // {
//     protected $data;

//     public function __construct()
//     {
//         $this->data = new MKategori();
//     }

//     public function kategoribyproduk()
//     {
//         $sData = [];
//         $data = $this->data->kategoribyproduk();
//         foreach ($data as $rs) {
//             $sData[] = [
//                 'id' => (int)$rs->idkategori,
//                 'nama' => $rs->kategori,
//             ];
//         }
//         return $this->response->setJSON($sData);
//     }
// }
