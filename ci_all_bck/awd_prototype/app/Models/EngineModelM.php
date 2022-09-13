<?php

namespace App\Models;

use CodeIgniter\Model;

class EngineModelM extends Model
{
    protected $table      = 'engine_model';
    protected $primaryKey = 'engine_model_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['manufacturer_id', 'engine_model'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}