
<p><?php echo $datos['titulo']; ?></p>
	<ul>
		<?php foreach($datos['libros'] as $libros):?>
		<li>
			<?php echo $libros->id_libro?>
			<?php echo $libros->id_editorial?>
			<?php echo $libros->nombre?>
			<?php echo $libros->num_pagina?>
			<?php echo $libros->ISBN?>
			<?php echo $libros->autor?>
			<?php echo $libros->tema?>
		</li>
		<?php endforeach; ?>
		
	</ul>

  