<?php
  if($_POST){
	include('models/class.Acceso.php');
	$acceso = new Acceso();
	$acceso->login();
}else {
	$template = new Smarty();
  	$template->display('templates/login.tpl');
	}
?>