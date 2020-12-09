<?php namespace App\Models;

use CodeIgniter\Model;

class asignaturaModel extends Model
{
    protected $table      = 'asignatura';
    protected $primaryKey = 'codigo';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}