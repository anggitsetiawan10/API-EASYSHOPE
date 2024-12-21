<?php
namespace App\Models;
use CodeIgniter\Model;

class MKategori extends Model
{
    protected $table = 'tb_kategori';
    protected $primaryKey = 'idkategori';
    protected $allowedFields = ['nama'];

    public function kategoribyproduk()
    {
        // Query untuk mendapatkan data kategori yang diinginkan
        return $this->findAll(); // Atau gunakan query builder jika ada kondisi khusus
    }
}

