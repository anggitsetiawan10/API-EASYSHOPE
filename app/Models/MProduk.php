<?php
namespace App\Models;

use CodeIgniter\Model;

class MProduk extends Model
{
    protected $table = 'tb_produk'; // Nama tabel yang benar
    protected $primaryKey = 'id'; // Primary Key
    protected $allowedFields = ['idkategori', 'kategori', 'judul', 'harga', 'thumbnail', 'st']; // Kolom yang bisa diakses

    // Menggunakan Query Builder
    public function kategoribyproduk()
    {
        return $this->select('idkategori, kategori')
                    ->distinct()
                    ->where('st', '1')
                    ->where('thumbnail <>', '')
                    ->findAll();
    }

    public function produkbykategori($id)
    {
        return $this->where('idkategori', $id)
                    ->where('thumbnail <>', '')
                    ->where('st', '1')
                    ->limit(5)
                    ->asObject()
                    ->findAll();
    }
}



// namespace App\Models;

// use CodeIgniter\Model;

// class MProduk extends Model
// {
//     protected $table = 'tb_produk'; // Nama tabel
//     protected $primaryKey = 'id'; // Primary Key
//     protected $allowedFields = ['idkategori', 'kategori', 'st', 'thumbnail']; // Kolom yang bisa diakses

//     public function kategoribyproduk()
//     {
//         $query = $this->db->query("SELECT DISTINCT idkategori, kategori FROM produk WHERE status = '1' AND thumbnail <> ''");
//         return $query->getResult();
//     }

//     public function produkbykategori($id)
//     {
//         // Query yang benar
//         $data = $this->db->query("SELECT * FROM produk WHERE idkategori = ? AND thumbnail <> '' AND status = '1' LIMIT 0, 5", [$id]);
//         return $data->getResult(); // Menggunakan getResult() untuk mendapatkan hasil query
//     }
// }