<?php

namespace App\Models;

use CodeIgniter\Model;

class ManufacturerTypeM extends Model
{
    protected $table      = 'manufacturer_type';
    protected $primaryKey = 'manufacturer_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['manufacturer_type', 'created_by', 'udpated_by'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    
}