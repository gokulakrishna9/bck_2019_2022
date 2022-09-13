<?php

namespace App\Models;

use CodeIgniter\Model;

class AircraftModelM extends Model
{
    protected $table      = 'aircraft_model';
    protected $primaryKey = 'aircraft_model_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['manufacturer_id', 'aircraft_model'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}