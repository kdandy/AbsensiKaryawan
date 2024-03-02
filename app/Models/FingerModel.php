<?php

namespace App\Models;

use CodeIgniter\Model;

class FingerModel extends Model
{
    protected $table = 'fingerprint';

    protected $primaryKey = 'id_fingerprint';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['ip_address'];
}