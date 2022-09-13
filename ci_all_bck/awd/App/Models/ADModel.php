<?php

namespace app\Models;

use CodeIgniter\Model;

class ADModel extends Model
{
    protected $table      = 'ad_record';
    protected $primaryKey = 'ad_number';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'ad_number', 'ad_type_id', 'subject', 
        'issued_by_id', 'effective_date', 'supersedes_ad_id',
        'superseded_by_ad_id', 'created_by', 'updated_by'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_on';
    protected $updatedField  = 'updated_on';
    //protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}