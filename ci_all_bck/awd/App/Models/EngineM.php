<?php

namespace App\Models;

use CodeIgniter\Model;

class EngineM extends Model
{
    protected $table      = 'engine';
    protected $primaryKey = 'engine_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['manufacturer_id', 'engine_serial_number', 'engine_model_id', 'engine_type_id'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}