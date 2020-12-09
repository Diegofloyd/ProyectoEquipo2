<?php namespace App\Models;

use CodeIgniter\Model;

class calificarProfeModel extends Model
{
    protected $table      = 'calificacion';
    protected $primaryKey = 'idCalificacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['alumno', 'asignatura', 'parcial', 'puntaje'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}