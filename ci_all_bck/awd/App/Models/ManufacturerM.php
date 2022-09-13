<?php

namespace App\Models;

use CodeIgniter\Model;

class ManufacturerM extends Model
{
    protected $table      = 'manufacturer';
    protected $primaryKey = 'manufacturer_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['manufacturer_name', 'created_by', 'udpated_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'update_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}