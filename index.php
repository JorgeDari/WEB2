<?php
	 include("config/config.ini.php");
	// $smarty->display("templates/default/index.html");
	 $smarty->assign("titulo","Inicio");
	 $smarty->display("header.tpl");
	 $smarty->display("menu.tpl");
	//-----------------------------------
	// Cacheamos la variable acc
	if($_GET["acc"] && $_GET["acc"]="registrar_usuario")
	{
		include("registrar_usuario.php");
	}

	//----------------------------------
	 $smarty->display("footer.tpl");
