<?php namespace App\Models;

use CodeIgniter\Model;

class horarioModel extends Model
{
    protected $table      = 'horariomateria';
    protected $primaryKey = 'idHorarioM';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['dia', 'inicio', 'fin', 'asignatura'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}