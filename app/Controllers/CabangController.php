<?php

namespace App\Controllers;

use App\Models\MCabang;

class CabangController extends RestfulController
{
    public function list()
    {
        $model = new MCabang();

        // Pilih kolom yang ingin dikembalikan
        $cabang = $model->select([
            'id', 
            'nama', 
            'alamat', 
            'kota', 
            'propinsi', 
            'kodepos', 
            'telp', 
            'email'
        ])->findAll();

        // Kembalikan data dalam format JSON
        return $this->responseHasil(200, true, $cabang);
    }
}





// namespace App\Controllers;
// use App\Models\MCabang;


// class CabangController extends RestfulController
// {
   
//     public function list()
//     {
//         $model = new MCabang();
//         $cabang = $model->findAll();
//         // $cabang = $model->select(['id', 'userid'])->findAll();
//         return $this->responseHasil(200, true, $cabang);
//     }
// }

