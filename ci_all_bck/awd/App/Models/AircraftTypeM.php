<?php

namespace App\Models;

use CodeIgniter\Model;

class AircraftTypeM extends Model
{
    protected $table      = 'aircraft_type';
    protected $primaryKey = 'aircraft_type_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['aircraft_type', 'aircraft_model_id'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}