<?php
require_once 'models/librosModel.php';
require_once 'views/librosView.php';


define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

class librosController{

private $model;
private $view;

public function __construct() {
       $this->model = new librosModel();
       $this->view = new librosView();
   }

   public function mostrarLibros()
   {
      $libros = $this->model->getlibros(); // trae de la base de datos todos los libros
      $this->view->mostrarLibros($libros);
   }

	public function mostrar_un_Libro($id)
   {
      $un_libro = $this->model->get_un_libro($id); // trae de la base de datos un libro
      $this->view->mostrar_un_Libro($un_libro);
	  	
   }
	
	public function eliminar_un_libro($id)
	{
	   // Me trae de la base de datos el libro con el id_libro=$id
	   $this->model->eliminar_un_libro($id);	
	   header("Location: http://localhost/MVC_APP/");	
	}
	
	public function cargar_formulario_libro()
	{
		$this->view->cargar_formulario_libro();
//		header("Location: http://localhost/MVC_APP/");
	}

	public function agregar_un_libro()
	{
		$nombre=$_POST["nombre"];
		$this->model->grabar_un_libro($nombre);
//		header("Location: http://localhost/MVC_APP/");
		
	}

	public function menu()
	{
		$this->view->menu_principal();
	}
}
  

