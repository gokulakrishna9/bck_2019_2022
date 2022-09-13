<?php

namespace App\Models;

use CodeIgniter\Model;

class EngineTypeM extends Model
{
    protected $table      = 'engine_type';
    protected $primaryKey = 'engine_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['engine_type', 'engine_model_id'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}