<?php namespace App\Models;

use CodeIgniter\Model;

class horarioModel extends Model
{
    protected $table      = 'horario';
    protected $primaryKey = 'idHorario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['asignatura', 'd1', 'd2', 'd3', 'd4', 'd5'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}