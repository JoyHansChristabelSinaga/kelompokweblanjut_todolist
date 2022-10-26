<?php

namespace App\Models;

use CodeIgniter\Model;

class Todolist extends Model
{
    protected $table            = 'data';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['username','kegiatan','waktu','deskripsi'];
}

