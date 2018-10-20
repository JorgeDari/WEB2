{include file="header.tpl"}
 <table>
   <tbody>
       {foreach from=$libros item=libro}
       <tr>
         <td>{$libro->id_libro}</td>
         <td>{$libro->id_editorial}</td>
         <td>{$libro->nombre}</td>
         <td>{$libro->num_pagina}</td>
         <td>{$libro->ISBN}</td>
         <td>{$libro->autor}</td>
         <td>{$libro->tema}</td>
         <td><a href="unlibro/{$libro->id_libro}">VER </a></td>
         <td><a href="eliminar/{$libro->id_libro}">ELIMINAR</a></td>
       </tr>
     {/foreach}
   </tbody>
 </table>
{include file="footer.tpl"}
