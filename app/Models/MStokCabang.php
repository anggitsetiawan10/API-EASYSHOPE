<?php

namespace App\Models;

use CodeIgniter\Model;

class MStokCabang extends Model
{
    protected $table = 'tb_stokcabang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['idcabang','idproduk'];
}