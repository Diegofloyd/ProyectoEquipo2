<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioAlumnoModel extends Model
{
    public function obtenerUsuarioAlumno($data){
        $Usuario =$this->db->table('alumno');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

}