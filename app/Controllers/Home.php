<?php

namespace App\Controllers;

use App\Models\alumnoModel;
use App\Models\calificarProfeModel;
use App\Models\asignaturaModel;
use App\Models\profeModel;
use App\Models\horarioModel;
use CodeIgniter\HTTP\Request;
use App\Models\usuarioModel;

class Home extends BaseController
{
	public function index()
	{
		return view('CabeceraPrincipal') . view('NavbarPrincipal') . view('MenuLPrincipal') . view('ContenidoPrincipal') . view('footer');
	}

	public function Administracion()
	{
		return view('CabeceraAdmin') . view('NavbarModAdmin') . view('ContenidoPAdmin') . view('footer');
	}
	/*Inicios de sesión*/
	public function LoginAdministrador()
	{
		return view('LogInAdmin') . view('footer');
	}

	public function Usuarios_Login()
	{
		
		$request = \Config\Services::request();
		$usuario = $request->getPost('nombre');
		$password = $request->getPost('contrasena');
		// $tipo=$request->getPost('tipo');
		$Usuario = new usuarioModel();
		


		$datosUsuario = $Usuario->obtenerUsuario(['nombre' => $usuario]);

		if (count($datosUsuario) > 0 && $password == $datosUsuario[0]['contrasena']) {


			$infoUsuario = [
				"nombre" => $datosUsuario[0]['nombre'],
				"apellidoPaterno" => $datosUsuario[0]['apellidoPaterno'],
				"apellidoMaterno" => $datosUsuario[0]['apellidoMaterno'],
				"contrasena" => $datosUsuario[0]['contrasena'],
				"tipo" => $datosUsuario[0]['tipo'],
				"correo" => $datosUsuario[0]['correo']
			];

			//$tipo=$datosUsuario[0]['tipo'];

			$session = session();
			$session->set($infoUsuario);
			$tipo = $datosUsuario[0]['tipo'];

			if ($tipo == "alumno") {
				return view('CabeceraAlumno') . view('NavbarModAlumno') . view('LNavAlumno') . view('ConteAlumno') . view('footer');
			} else if ($tipo == "profesor") {

				return view('CabeceraProfe') . view('NavbarModProfe') . view('LNavProfe') . view('ContePProfe') . view('footer');
			} else if ($tipo == "administrador") {

				return view('CabeceraAdmin') . view('NavbarModAdmin') . view('ContenidoPAdmin') . view('footer');
			} else {

				echo "No existe ese tipo de usuario";
				return view('LogInAlumno') . view('footer');
			}
		} else {
			//echo 'no entraste';

			return view('LoginAlumno') . view('footer');
		}
	}

	public function LoginProfesor()
	{
		return view('LogInProfe') . view('footer');
	}

	/*MODULO ADMINISTRADOR*/
    /*Admin de Alumnos*/
    public function AdminUsuarios()
	{
		return view('CabeceraAdmin').view('NavbarModAdmin').view('ConteAdUsu').view('footer');
	}
    
    /*Dentro de AdminUsuarios*/
    public function Usuarios_Alta()
	{
		return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminAl').view('ConteAlUsu').view('footer');
	}
    
    public function Usuarios_Visual()
	{   
		$variable = new usuarioModel($db);
        $info['osito']=$variable->findAll();
        return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminAl').view('ConteViUsu',$info).view('footer');
	}
	//---------------------------------------------------------modificado------------------------------------------

	

	/*Asignaturas*/
    public function Asignaturas()
	{
		return view('CabeceraAdmin').view('NavbarModAdmin').view('ConteAdAsi').view('footer');
	}
    public function Asignaturas_Alta()
	{
		return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteAlAsi').view('footer');
	}
    
    public function Asignaturas_Visual()
	{
        $variable = new asignaturaModel($db);
        $info['osito']=$variable->findAll();
		return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteViAsi',$info).view('footer');
	}
	//------------------------------------modificacion---------------------------------------------------------

	/*MODULO ALUMNO*/
	/**/
	public function Alumno()/*Pendiente**/
	{
		return view('CabeceraAlumno') . view('NavbarModAlumno') . view('LNavAlumno') . view('ConteAlumno') . view('footer');
	}
	public function Alumno_Horario()/*Pendiente**/
	{
		$data = [
			'asignatura' => 'Lunes',
			'd1' => '01:30',
			'd2' => '03:00',
			'd3' => '03:00',
			'd4' => '03:00',
			'd5' => '03:00'
		];

		$variable = new horarioModel($db);
		$variable->insert($data);
		$horario['horario'] = $variable->findAll();
		return view('CabeceraAlumno') . view('NavbarModAlumno') . view('LNavAlumno') . view('ConteAlHor', $horario) . view('footer');
	}
	public function Alumno_DaPe()/*Pendiente**/
	{

		$variable = new usuarioModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabeceraAlumno') . view('NavbarModAlumno') . view('LNavAlumno') . view('ConteAlDaPe', $info) . view('footer');
	}

	public function Alumno_Calificacion()/*Pendiente**/
	{
		
		$variable = new calificarProfeModel($db);
		$variable -> where('Diego');
		$infoCal['osito'] = $variable -> findAll();
		
		return view('CabeceraAlumno') . view('NavbarModAlumno') . view('LNavAlumno') . view('ConteAlCal', $infoCal) . view('footer');
	}

	/*MODULO PROFESOR*/
	/*Principal*/
	public function Profesor()
	{
		return view('CabeceraProfe') . view('NavbarModProfe') . view('LNavProfe') . view('ContePProfe') . view('footer');
	}
	public function Profesor_Alumnos()
	{
		return view('CabeceraProfe') . view('NavbarModProfe') . view('LNavProfe') . view('ConteProfeAl') . view('footer');
	}
	public function Profesor_DatosP()
	{
		$variable = new usuarioModel($db);
		$info['osito'] = $variable->find([2]);
		return view('CabeceraProfe') . view('NavbarModProfe') . view('LNavProfe') . view('ConteProfeDaPe', $info) . view('footer');
	}
	public function Profesor_Calificaciones() //Esto ya esta
	{
		$request = \Config\Services::request();
		$nAlumno = $request->getPost('alumno');
		$nAsignatura = $request->getPost('asignatura');
		$parcial1 = $request->getPost('p1');
		$parcial2 = $request->getPost('p2');
		$parcial3 = $request->getPost('p3');

		$data = [
			'alumno' => $nAlumno,
			'asignatura' => $nAsignatura,
			'p1' => $parcial1,
			'p2' => $parcial2,
			'p3' => $parcial3
		];

		$calificacionUp = new calificarProfeModel($db);
		$calificacionUp->insert($data);

		return view('CabeceraProfe') . view('NavbarModProfe') . view('LNavProfe') . view('ConteProfeCal') . view('footer');
	}
	public function Profesor_Pagos()
	{
		return view('CabeceraProfe') . view('NavbarModProfe') . view('LNavProfe') . view('ConteProfePag') . view('footer');
	}



	/*OPERACIONES*/
    /*ASIGNATURAS*/
    public function Asignaturas_Insert()
	{
        $request=\Config\Services::request();
        $nombre=$request->getPost('nombre');
        $data = [
			'nombre' =>$nombre 
		];
		$variable = new asignaturaModel($db);
		$variable->insert($data);
        $info['osito']=$variable->findAll();
		return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteViAsi',$info).view('footer');
	}
    public function Asignaturas_Update(){
        $variable = new asignaturaModel($db);
        $request=\Config\Services::request();
        $codigo=$request->getPostGet('id');
        $users=$variable->find([$codigo]);
        $users=array('users'=>$users); 
        return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteViEdiAsi',$users).view('footer');
    }
    public function Asignaturas_Update2(){
        $variable = new asignaturaModel($db);
        $request=\Config\Services::request();
        $id=$request->getPost('id');
        $nombre=$request->getPost('nombre');
        $data = [
            'codigo'=>$id,
			'nombre' => $nombre
		];
        $variable->update($id,$data);
        $info['osito']=$variable->findAll();
        return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteViAsi',$info).view('footer'); 
    }
    public function Asignaturas_Delete(){
        $variable = new asignaturaModel($db);
        $request=\Config\Services::request();
        $codigo=$request->getPostGet('id');
        $variable->delete($codigo);
        $info['osito']=$variable->findAll();
		return view('CabecAdAsi').view('NavbarModAdmin').view('LNavAdminAs').view('ConteViAsi',$info).view('footer');        
	}
	
	//----------------------------------------------modificacion----------------------------------------------

	/*ALUMNO*/
    public function Usuarios_Insert()
	{
        $request=\Config\Services::request();
        $nombre=$request->getPost('nombre');
        $apaterno=$request->getPost('apaterno');
        $amaterno=$request->getPost('amaterno');
        $correo=$request->getPost('correo');
        $contrasena=$request->getPost('contrasena');
        $tipo=$request->getPost('tipo');
        $data = [
			'nombre' => $nombre,
			'apellidoPaterno' => $apaterno,
			'apellidoMaterno' => $amaterno,
			'correo'    => $correo,
			'contrasena' =>  $contrasena,
            'tipo'=>$tipo
		];
        
		$variable = new usuarioModel($db);
		$variable->insert($data);
        $info['osito']=$variable->findAll();
        return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminAl').view('ConteViUsu',$info).view('footer');
	}
    
    public function Usuarios_Update(){
        $variable = new usuarioModel($db);
        $request=\Config\Services::request();
        $idUsuario=$request->getPostGet('id');
        $users=$variable->find([$idUsuario]);
        $users=array('users'=>$users);
        return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminAl').view('ConteViEdiUsu',$users).view('footer');
    }
    public function Usuarios_Update2(){
        $variable = new usuarioModel($db);
        $request=\Config\Services::request();
        $id=$request->getPost('id');
        $nombre=$request->getPost('nombre');
        $apaterno=$request->getPost('apaterno');
        $amaterno=$request->getPost('amaterno');
        $correo=$request->getPost('correo');
        $contrasena=$request->getPost('contrasena');
        $tipo=$request->getPost('tipo');
        $data = [
            'idUsuario'=>$id,
			'nombre' => $nombre,
			'apellidoPaterno' => $apaterno,
			'apellidoMaterno' => $amaterno,
			'correo'    => $correo,
			'contrasena' =>  $contrasena,
           'tipo'=>$tipo
		];
        $variable->update($id,$data);
        $info['osito']=$variable->findAll();
        return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminAl').view('ConteViUsu',$info).view('footer');
        
    }
    public function Usuarios_Delete(){
        $variable = new usuarioModel($db);
        $request=\Config\Services::request();
        $idUsuario=$request->getPostGet('id');
        $variable->delete($idUsuario);
        $info['osito']=$variable->findAll();
        return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminAl').view('ConteViUsu',$info).view('footer');
    }



}