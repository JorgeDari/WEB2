<?php
require_once 'models/class.conexion.php';  

class librosModel extends Conexion
{
	
  function getlibros()
 {
     $sentencia = $this->db_connection->prepare( "select * from libro");
     $sentencia->execute();
     return $sentencia->fetchAll(PDO::FETCH_OBJ);
 }

  function get_un_libro($id){
   $consulta = $this->db_connection->prepare("select * from libro WHERE id_libro = ?");
   $consulta->execute(array($id)); // se ejecuta con un arreglo con los parametros
   return $consulta->fetch(PDO::FETCH_OBJ);
 }
	
   function eliminar_un_libro($id)
   {	   
	   // Elimino un libro
	   $consulta = $this->db_connection->prepare("DELETE FROM libro WHERE id_libro=?");
	   $consulta->execute(array($id));
	   
   }
	
//	function valid(id_edit,nom,pag,isbn,autor,tema)
//	{
//		 isset($_POST['id_edit'],$_POST['nom'],$_POST['pag'],$_POST['isbn'],$_POST['autor'],$_POST['tema']) and
//			$_POST['id_edit']!=0 and $_POST['nom']!='' and $_POST['pag']!=0 and $_POST['isbn']!='' and $_POST['autor']!=''
//			and $_POST['tema']!='';
//			return(true);	
//		 
//	}
	
	public function agregar_un_libro()
	{
		// Validamos que las variables no esten vacias
//		if (valid(nroEdit,nombre,paginas,isbn,autor,tema))
		if (isset($_POST['nroEdit'],$_POST['nombre'],$_POST['paginas'],$_POST['isbn'],$_POST['autor'],$_POST['tema']) and
			$_POST['nroEdit']!=0 and $_POST['nombre']!='' and $_POST['paginas']!=0 and $_POST['isbn']!='' and $_POST['autor']!=''
			and $_POST['tema']!='')
		{
			$id_Edit=$_POST['nroEdit'];
			$nombre=$_POST['nombre'];
			$paginas=$_POST['paginas'];
			$isbn=$_POST['isbn'];
			$autor=$_POST['autor'];
			$tema=$_POST['tema'];
			// Preparo la consulta a la Base de Datos
			$consulta = $this->db_conection->prepare("INSERT INTO libro (id_libro,id_editorial,nombre,num_pagina,ISBN,autor,tema) VALUES ('0','$id_Edit','$nombre','$paginas','$isbn','$autor','$tema')");
			// Ejecuto la consulta
			$consulta->execute();
		}
		else
		{
			echo 'Cargar nuevamente la pagina';
		}
		
		public function grabar_un_libro($nombre)
		{
			$consulta = $this->db_conection->prepare("INSERT INTO libro (nombre) VALUES (?)");
			// Ejecuto la consulta
			$consulta->execute(array($nombre));
			
		}
		}
	}
}