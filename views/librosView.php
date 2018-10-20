<?php

  require_once "libs/Smarty.class.php";

 class librosView {

   private $basehref;

   public function __construct()
   {
           $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
   }

	public function menu_principal()
	{
		$smarty = new Smarty();
		$smarty->display("header.tpl");
		$smarty->display("menu.tpl");
		$smarty->display("footer.tpl");
	}
  
    public function mostrarLibros($libros)
    {
      // Creamos una instancia de la clase smarty
      $smarty = new Smarty();
      $smarty->assign('libros',$libros);
      // Renderizamos el archivo
      $smarty->display('templates/ejemplo.tpl');
    }


      public function mostrar_un_Libro($libro)
      {
        $smarty = new Smarty();
        $smarty->assign('libro',$libro);
        $smarty->display('templates/libro.tpl');
     }
	 
	 public function cargar_formulario_libro()
	 {
		 $smarty = new Smarty();
		 $smarty->display('templates/altas.tpl');
	 }

}
