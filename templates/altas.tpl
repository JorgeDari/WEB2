{include file="header.tpl"}
 
   <tbody>
    <form  method="post" action="/models/librosModel.php">
    <action>
    	<legend>ALTA DE DATOS - LIBROS -</legend>
		<P><label>Nro de Editorial:<input type="number" name="nroEdit"></label></P>;
        <p><label>Nombre:<input type="text" name="nombre"></label></P>;
        <P><label>Numero de Paginas:<input type="number" name="paginas"></label></P>;
        <P><label>ISBN:<input type="text" name="isbn"></label></P>;
        <P><label>Autor:<input type="text" name="autor"></label></P>;
        <P><label>Tema:<input type="text" name="tema"></label></P>;
        <P><input type="submit" value="agregar_un_libro()"></P>;
    </action>
    </form>
   </tbody>

{include file="footer.tpl"}