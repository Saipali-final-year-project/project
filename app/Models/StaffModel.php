<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tblstaff';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['firstname','lastname','email','mobile','password','NIN','photo', 'type','status', 'uniid','activation_date'];

        // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function getEmail($email)
    {
        $sql = "SELECT email FROM tblstaff WHERE email like ? LIMIT 1";
        $query = $this->db->query($sql, [$email]);
        $row = $query->getRow();
        if ($row) {
            return true;
        }
        return false;
    }
  
}
