<?php namespace App\Models;

use CodeIgniter\Model;

class usuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'idUsuario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'apellidoPaterno', 'apellidoMaterno','contrasena','tipo', 'correo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function obtenerUsuario($data){
        $Usuario=$this->db->table('usuario');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }
}