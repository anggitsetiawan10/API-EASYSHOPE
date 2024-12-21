<?php
namespace App\Controllers;

use App\Models\MProduk;

class ProdukController extends BaseController
{
    protected $data;

    public function __construct()
    {
        $this->data = new MProduk();
    }

    private function rp($rp)
    {
        $a = $rp;
        $b = explode(".", $a);
        $rp = $b[0];
        $koma = count($b) > 1 ? $b[1] : "";
        $rupiah = "";
        $p = strlen($rp);
        while ($p > 3) {
            $rupiah = "." . substr($rp, -3) . $rupiah;
            $rp = substr($rp, 0, strlen($rp) - 3);
            $p = strlen($rp);
        }
        $rupiah = ($koma === "" || $koma === "0" || $koma === "00") ? $rp . $rupiah : $rp . $rupiah . "." . $koma;
        return $rupiah === "0" ? "" : $rupiah;
    }

    public function produkbykategori()
    {
        $sData = [];
        $data = $this->data->produkbykategori($this->request->getGet('id'));
        foreach ($data as $rs) {
            $sData[] = [
                'id' => (int)$rs->id,
                'idkategori' => (int)$rs->idkategori,
                'judul' => $rs->judul,
                'harga' => "Rp." . $this->rp($rs->harga),
                'hargax' => $rs->harga,
                'thumbnail' => $rs->thumbnail,
            ];
        }
        return $this->response->setJSON($sData);
    }
}

// namespace App\Controllers;

// use App\Models\MProduk;

// class ProdukController extends BaseController
// {
//     protected $data;

//     public function __construct()
//     {
//         $this->data = new MProduk();
//     }

//     private function rp($rp)
//     {
//         $a = $rp;
//         $b = explode(".", $a);
//         $rp = $b[0];
//         $koma = count($b) > 1 ? $b[1] : "";
//         $rupiah = "";
//         $p = strlen($rp);
//         while ($p > 3) {
//             $rupiah = "." . substr($rp, -3) . $rupiah;
//             $rp = substr($rp, 0, strlen($rp) - 3);
//             $p = strlen($rp);
//         }
//         $rupiah = ($koma === "" || $koma === "0" || $koma === "00") ? $rp . $rupiah : $rp . $rupiah . "." . $koma;
//         return $rupiah === "0" ? "" : $rupiah;
//     }

//     public function produkbykategori()
//     {
//         $sData = [];
//         $data = $this->data->produkbykategori($this->request->getGet('id'));
//         foreach ($data as $rs) {
//             $sData[] = [
//                 'id' => (int)$rs->id,
//                 'idkategori' => (int)$rs->idkategori,
//                 'judul' => $rs->judul,
//                 'harga' => "Rp." . $this->rp($rs->harga),
//                 'hargax' => $rs->harga,
//                 'thumbnail' => $rs->thumbnail,
//             ];
//         }
//         return $this->response->setJSON($sData);
//     }
// }
