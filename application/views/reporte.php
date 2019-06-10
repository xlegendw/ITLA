<?php plantilla::aplicar(); ?>

<h1>Vehiculos Vendidos</h1>

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
             $rs= core_vehiculo::listadov();
             foreach($rs as $vehiculo){
          echo <<<VEHICULO
              <tr>
              <th>{$vehiculo->marca}</th>
              <th>{$vehiculo->modelo}</th>
              <th>{$vehiculo->color}</th>
              <th>{$vehiculo->anio}</th>
              <th>{$vehiculo->matricula}</th>
              <th>{$vehiculo->placa}</th>
              <th>{$vehiculo->precio}</th>
              </tr>
VEHICULO;
             }
        ?>
        </tbody>