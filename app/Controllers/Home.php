<?php namespace App\Controllers;

use App\Models\alumnoModel;
use App\Models\calificarProfeModel;
use App\Models\asignaturaModel;
//use App\Models\alumnoModel;
use App\Models\profeModel;
use App\Models\horarioModel;
use CodeIgniter\HTTP\Request;
use App\Models\UsuarioAlumnoModel;

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

	public function LoginAlumno()
	{
		/*
		$usuario =$this->request->getPost('correo');
		$password=$this->request->getPost('matricula');
		$Usuario = new UsuarioAlumnoModel();
		$datosUsuario = $Usuario->obtenerUsuarioAlumno(['correo'=> $usuario]);

		if(count($datosUsuario)>0 && password_verify($password, $datosUsuario[0]['matricula'])){
			$data = [
				"correo" => $datosUsuario[0]['correo'],
				"type" => $datosUsuario[0]['type']
			];
			$session = session();
			$session->set($data);
			
		}else{
			//return redirect()->to(base_url('/index.php/Home/Alumno_Horario'))->with('mensaje', '1');
		}
		*/
		return view('LogInAlumno') . view('footer');
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
			'dia' => 'Lunes',
			'inicio' => '01:30',
			'fin' => '03:00',
			'asignatura' => 'Matematicas'
		];

		$variable = new horarioModel($db);
		$variable->insert($data);
		$variable = new horarioModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabeceraAlumno') . view('NavbarModAlumno') . view('LNavAlumno') . view('ConteAlHor', $info) . view('footer');
	}
	public function Alumno_DaPe()/*Pendiente**/
	{
	
		$variable = new alumnoModel($db);
		$info['osito'] = $variable->findAll();
		return view('CabeceraAlumno') . view('NavbarModAlumno') . view('LNavAlumno') . view('ConteAlDaPe', $info) . view('footer');
	}

	public function Alumno_Calificacion()/*Pendiente**/
	{
		$calificacionUp = new calificarProfeModel($db);
		$infoCal['calAlumno'] = $calificacionUp->findAll();
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
		$info['osito'] = $variable->findAll();
		return view('CabeceraProfe') . view('NavbarModProfe') . view('LNavProfe') . view('ConteProfeDaPe', $info) . view('footer');
	}
	public function Profesor_Calificaciones()
	{	
		$request = \Config\Services::request();
		$nAlumno = $request->getPost('alumno');
		$nAsignatura = $request->getPost('asignatura');
		$parcial = $request->getPost('parcial');
		$puntaje = $request->getPost('puntaje');

		$data = [
			'alumno' => $nAlumno,
			'asignatura' => $nAsignatura,
			'parcial' => $parcial,
			'puntaje' => $puntaje
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
