<?php plantilla::aplicar(); ?>

<h3> Listado de personas </h3>

<table class='table'>
        <thead>
             <tr>
                 <th>Cedula</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Genero</th>
                 <th>Tipo de Sangre</th>
             </tr>

        </thead>
        <tbody>
             <?php

             $rs= core_persona::listado();
             foreach($rs as $persona){
                 $urlEditar = base_url("main/newp/{$persona->cedula}");
                 $urlBorrar = base_url("main/borrar/{$persona->cedula}");
          echo <<<PERSONA
              <tr>
                 <th>{$persona->cedula}</th>
                 <th>{$persona->nombre}</th>
                 <th>{$persona->apellido}</th>
                 <th>{$persona->genero}</th>
                 <th>{$persona->tipigraficacion}</th>
                   <td><a href='{$urlBorrar}' class='btn btn-danger'>X</td>
                   <td><a href='{$urlEditar}' class='btn btn-warning'><i class='fa fa-edit'</td>
              </tr>
PERSONA;
             }
        ?>
        </tbody>
</table>