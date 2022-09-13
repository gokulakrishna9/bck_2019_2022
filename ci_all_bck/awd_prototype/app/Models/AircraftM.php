<?php

namespace App\Models;

use CodeIgniter\Model;

class AircraftM extends Model
{
    protected $table      = 'aircraft';
    protected $primaryKey = 'aircraft_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['aircraft_serial_number', 'manufacturer_id', 'aircraft_model_id', 'aircraft_type_id'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}