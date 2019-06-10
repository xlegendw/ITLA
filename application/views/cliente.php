<?php plantilla::aplicar(); ?>

<h3> Listado de Clientes </h3>

<table class='table'>

        <thead>

             <tr>

                 <th>Cedula</th>

                 <th>Nombre</th>

                 <th>Apellido</th>

                 <th>Telefono</th>

                 <th>Direccion</th>

             </tr>



        </thead>
        <tbody>
             <?php
             $rs= core_vehiculo::listadoc();
             foreach($rs as $cliente){
               $urlEditar = base_url("welcome/editar_cliente/{$cliente->id}");
          echo <<<CLIENTE
              <tr>
              <th>{$cliente->cedula}</th>
              <th>{$cliente->nombre}</th>
              <th>{$cliente->apellido}</th>
              <th>{$cliente->telefono}</th>
              <th>{$cliente->direccion}</th>
              <td><a href='{$urlEditar}' class='btn btn-warning'><i class='fa fa-edit'</td>
              </tr>
CLIENTE;
             }
        ?>
        </tbody>