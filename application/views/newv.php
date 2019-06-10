<?php plantilla::aplicar();
   
   if($_POST){
      $vehiculo= $_POST;
      core_vehiculo::guardar($vehiculo);
      redirect('welcome/vehiculos');
   }
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



<h3> Editar Vehiculo</h3>

<form method="post" action="">

      <div class='row'>

           <div class='col-md=6'>
           <input type="hidden" name='id' value='<?= $vehiculo->id;?>'/>

           <?= asgInput('marca','Marca', $vehiculo->marca); ?>
           <?= asgInput('modelo','Modelo', $vehiculo ->modelo); ?>
           <?= asgInput('color','Color', $vehiculo->color); ?>
           <?= asgInput('anio','Año', $vehiculo->anio); ?>
           <?= asgInput('matricula','Matricula', $vehiculo->matricula); ?>
           <?= asgInput('placa','Placa', $vehiculo->placa); ?>                
           <?= asgInput('precio','Precio', $vehiculo->precio); ?>
           

           <div class='text-center'>
               <button type="submit" class='btn btn-primary'>
                <i class='fa fa-save'></i>
                 Guarda

           </div>

           </div>

      </div>



</form>