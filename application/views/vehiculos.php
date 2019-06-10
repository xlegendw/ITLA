<?php plantilla::aplicar(); 
?>

<h3> Listado de vehiculos </h3>

<table class='table'>

        <thead>

             <tr>

                 <th>Marca</th>

                 <th>Modelo</th>

                 <th>Color</th>

                 <th>Matricula</th>

                 <th>Placa</th>
                 
                 <th>Año</th>

                 <th>Precio</th>

             </tr>



        </thead>

        <tbody>
             <?php
             $rs= core_vehiculo::listado();
             foreach($rs as $vehiculo){
               $urlEditar = base_url("welcome/editar/{$vehiculo->id}");
               $urlSell = base_url("welcome/sell/{$vehiculo->id}");
          echo <<<VEHICULO
              <tr>
              <th>{$vehiculo->marca}</th>
              <th>{$vehiculo->modelo}</th>
              <th>{$vehiculo->color}</th>
              <th>{$vehiculo->anio}</th>
              <th>{$vehiculo->matricula}</th>
              <th>{$vehiculo->placa}</th>
              <th>{$vehiculo->precio}</th>
              <td><a href='{$urlEditar}' class='btn btn-warning'><i class='fa fa-edit'</td>
              <td><a href='{$urlSell}' class='btn btn-warning'><i class='fa fa-tag'</td>
              </tr>
VEHICULO;
             }
        ?>
        </tbody>