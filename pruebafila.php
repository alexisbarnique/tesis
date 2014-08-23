<?php
    include ('libreria.php');
    cab('Prueba fila');
?>
    <h1 class="page-header">prueba fila</h1>
    <div class="row">
<form>
<table>
    <thead>
<tr>
      <th scope="col">Pista</th>
      <th scope="col">Album</th>
      <th scope="col">Artista</th>
     </tr>
</thead>
     
    <tbody>
<tr>
      <td><input id="pista1" name="pista1" /></td>
      <td><input id="album1" name="album1" /></td>
      <td><select id="artista1" name="artista1">
        <option value="">Seleccionar</option>
        <option value="1">Artista 1</option>
        <option value="2">Artista 2</option>
        <option value="3">Artista 3</option>        
       </select>
      </td>
     </tr>
</tbody>
   </table>
</form>
<button>Add</button>
    <?php
    pie();
?>