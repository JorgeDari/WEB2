{include file="header.tpl"}
 <table>
   <tbody>
       <tr>
         <td>{$libro->id_libro}</td>
         <td>{$libro->id_editorial}</td>
         <td>{$libro->nombre}</td>
         <td>{$libro->num_pagina}</td>
         <td>{$libro->ISBN}</td>
         <td>{$libro->autor}</td>
         <td>{$libro->tema}</td>
       </tr>
   </tbody>
 </table>
{include file="footer.tpl"}
