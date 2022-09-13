<?php

namespace App\Models;


use CodeIgniter\Model;

class AviationAuthorityM extends Model
{
    protected $table      = 'avaiation_authority';
    protected $primaryKey = 'avaiation_authority_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['avaiation_authority'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}