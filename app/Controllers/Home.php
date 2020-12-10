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
			echo 'no entraste';

			return view('LoginAlumno') . view('footer');
		}
	}

	public function LoginProfesor()
	{
		return view('LogInProfe') . view('footer');
	}

	/*MODULO ADMINISTRADOR*/
	/*Admin de Alumnos*/
	public function AdminAlumnos()
	{
		return view('CabeceraAdmin') . view('NavbarModAdmin') . view('ConteAdAlum') . view('footer');
	}
	public function AdminProfes()
	{
		return view('CabeceraAdmin') . view('NavbarModAdmin') . view('ConteAdProf') . view('footer');
	}

	/*Dentro de AdminAlumnos*/
	public function Alumnos_Alta()
	{
		return view('CabecAdUs') . view('NavbarModAdmin') . view('LNavAdminAl') . view('ConteAlAlu') . view('footer');
	}

	public function Alumnos_Baja()
	{
		$variable = new alumnoModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabecAdUs') . view('NavbarModAdmin') . view('LNavAdminAl') . view('ConteBaAlu', $info) . view('footer');
		//return view('CabecAdUs').view('NavbarModAdmin').view('LNavAdminUs').view('ConteBaAlu').view('footer');
	}

	public function Alumnos_Modificacion()
	{
		$variable = new alumnoModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabecAdUs') . view('NavbarModAdmin') . view('LNavAdminAl') . view('ConteModAlu', $info) . view('footer');
	}

	/*Dentro de AdminProfes*/
	public function Profes_Alta()
	{
		return view('CabecAdUs') . view('NavbarModAdmin') . view('LNavAdminPro') . view('ConteAlPro') . view('footer');
	}

	public function Profes_Baja()
	{
		$variable = new profeModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabecAdUs') . view('NavbarModAdmin') . view('LNavAdminPro') . view('ConteBaPro', $info) . view('footer');
	}

	public function Profes_Modificacion()
	{
		$variable = new profeModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabecAdUs') . view('NavbarModAdmin') . view('LNavAdminPro') . view('ConteModPro', $info) . view('footer');
	}


	/***        ***/
	/*Asignaturas*/
	public function Asignaturas()
	{

		return view('CabeceraAdmin') . view('NavbarModAdmin') . view('ConteAdAsi') . view('footer');
	}
	public function Asignaturas_Alta()
	{

		return view('CabecAdAsi') . view('NavbarModAdmin') . view('LNavAdminAs') . view('ConteAlAsi') . view('footer');
	}

	public function Asignaturas_Baja()
	{
		$variable = new asignaturaModel($db);
		$info['osito'] = $variable->findAll();

		return view('CabecAdAsi') . view('NavbarModAdmin') . view('LNavAdminAs') . view('ConteBaAsi', $info) . view('footer');
	}

	public function Asignaturas_Modificacion()
	{
		$variable = new asignaturaModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabecAdAsi') . view('NavbarModAdmin') . view('LNavAdminAs') . view('ConteModAsi', $info) . view('footer');
	}

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

		$variable = new profeModel($db);
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
		$variable = new profeModel($db);
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
	public function Asignaturas_Insert() //Esto ya esta
	{
		$request = \Config\Services::request();
		$nombre = $request->getPost('nombre');
		$data = [
			'nombre' => $nombre
		];
		$variable = new asignaturaModel($db);
		$variable->insert($data);
		$variable = new asignaturaModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabecAdAsi') . view('NavbarModAdmin') . view('LNavAdminAs') . view('ConteBaAsi', $info) . view('footer');
	}

	/*ALUMNO*/
	public function Alumnos_Insert()
	{
		$request = \Config\Services::request();
		$nombre = $request->getPost('nombre');
		$apaterno = $request->getPost('apaterno');
		$amaterno = $request->getPost('amaterno');
		$correo = $request->getPost('correo');
		$grupo = $request->getPost('grupo');
		$data = [
			'nombre' => $nombre,
			'apellidoPaterno' => $apaterno,
			'apellidoMaterno' => $amaterno,
			'conrasena' => $amaterno,
			'tipo' => $amaterno,
			'correo'    => $correo,
			'grupo' =>  $grupo
		];

		$variable = new alumnoModel($db);
		$variable->insert($data);
		$variable = new alumnoModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabecAdUs') . view('NavbarModAdmin') . view('LNavAdminAl') . view('ConteModAlu', $info) . view('footer');
	}



	/*PROFESOR*/
	public function Profe_Insert()
	{
		$request = \Config\Services::request();
		$nombre = $request->getPost('nombre');
		$apaterno = $request->getPost('apaterno');
		$amaterno = $request->getPost('amaterno');
		$correo = $request->getPost('correo');
		$data = [
			'nombre' => $nombre,
			'apellidoPaterno' => $apaterno,
			'apellidoMaterno' => $amaterno,
			'correo'    => $correo
		];

		$variable = new profeModel($db);
		$variable->insert($data);
		$info['osito'] = $variable->findAll();
		return view('CabecAdUs') . view('NavbarModAdmin') . view('LNavAdminPro') . view('ConteModPro', $info) . view('footer');
	}
	//--------------------------------------------------------------------

}
