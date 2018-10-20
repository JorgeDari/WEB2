<?php
require_once 'controllers/librosController.php';
require_once 'views/librosView.php';

//	require_once 'models/class.conexion.php'
//	$db = new Conexion();
	

// constantes
	
define('ACTION',0);
define('VALOR1',1);
define('VALOR2',2);
define('VALOR3',3);

// si no indica "action" forzamos asi entra al default
if (!isset($_GET['action']))
    $_GET['action'] = '';

// parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
$action = $_GET['action'];
$partesURL = explode("/", $action);

// decide que acción tomar en base a la url
switch ($partesURL[ACTION])
{
	case "menu":
		$controller = new libroController();
		$controller->menu();
		break;
     case "libros" :  //  Me trae todos los datos de la ase de datos
		 $controller = new librosController(); 
         $controller->mostrarLibros();
         break;
     case "unlibro" :  // Me trae un solo libro de la base de datos
		$controller = new librosController();
		$controller->mostrar_un_Libro($partesURL[VALOR1]); 
        break;
	 case "eliminar": 
		$controller = new librosController();
		$controller->eliminar_un_libro($partesURL[VALOR1]); 
		break;
	case "agregar":
		$controller = new librosController();
		$controller->cargar_formulario_libro();
		break;
	case "agregar_un_libro":
		$controller = new librosController();
		$controller->agregar_un_libro();
		break;
     default :
        $controller = new librosController();
        $controller->mostrarLibros();
     break;
}
