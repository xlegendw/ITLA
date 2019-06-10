<?php plantilla::aplicar(); 

   $vehiculo = new stdClass;
   $vehiculo->id = '';
   $vehiculo->marca = '';
   $vehiculo ->modelo = '';
   $vehiculo->color = '';
   $vehiculo->anio = '';
   $vehiculo->matricula = '';
   $vehiculo->placa = '';
   $vehiculo->precio = '';

   if(isset($id)){
      $rs = core_vehiculo::vehiculo_id($id);
      if(count($rs) > 0){
         $vehiculo = $rs[0];
      }
   }

?>




<div class="row">
  <div class="col-sm-4">
      <h1>Factura</h1>
  </div>
  <div class="col-sm-8">
      <h1>Contrato</h1>
      <br>

  </div>
</div>

<?php
            $urlSold = base_url("welcome/sold/{$vehiculo->id}");
            core_vehiculo::listado();
          echo <<<VEHICULO
          <div class="row">
            <div class="col-sm-4">
             <ul class="list-group">
             <li class="list-group-item">Marca: {$vehiculo->marca}</li>
             <li class="list-group-item">Modelo: {$vehiculo->modelo}</li>
             <li class="list-group-item">Color: {$vehiculo->color}</li>
             <li class="list-group-item">Año: {$vehiculo->anio}</li>
             <li class="list-group-item">Matricula: {$vehiculo->matricula}</li>
             <li class="list-group-item">Placa: {$vehiculo->placa}</li>
             <li class="list-group-item">Precio: {$vehiculo->precio}</li>
             </ul>
             
            </div>
            <br>
            <div class="col-sm-8">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <br>
            <p><a href='{$urlSold}'>Aceptar</a></p>
        </div>
         </div>
         

VEHICULO;
             
        ?>

  </div>
</div>

      
