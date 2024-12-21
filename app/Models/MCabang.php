<?php

namespace App\Models;

use CodeIgniter\Model;

class MCabang extends Model
{
    protected $table = 'tb_cabang';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama', 'alamat', 'kota', 'propinsi', 'kodepos', 'telp', 'email'];

    // protected $allowedFields = ['userid'];
}
