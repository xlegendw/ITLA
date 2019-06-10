<?php plantilla::aplicar();
   
   if($_POST){
    $cliente= $_POST;
    core_vehiculo::guardarc($cliente);
    redirect('welcome/cliente');
 }
 $cliente = new stdClass;
 $cliente->id = '';
 $cliente->cedula = '';
 $cliente ->nombre = '';
 $cliente->apellido = '';
 $cliente->telefono = '';
 $cliente->direccion = '';

 if(isset($id)){
      $rs = core_vehiculo::cliente_id($id);
      if(count($rs) > 0){
         $cliente = $rs[0];
      }
   }

?>



<h3> Editar Cliente</h3>

<form method="post" action="">

      <div class='row'>

           <div class='col-md=6'>
           <input type="hidden" name='id' value='<?= $cliente->id;?>'/>

           <?= asgInput('cedula','Cedula', $cliente->cedula); ?>
           <?= asgInput('nombre','Nombre', $cliente ->nombre); ?>
           <?= asgInput('apellido','Apellido', $cliente->apellido); ?>
           <?= asgInput('telefono','Telefono',  $cliente->telefono); ?>
           <?= asgInput('direccion','Direccion',  $cliente->direccion); ?>
           

           <div class='text-center'>
               <button type="submit" class='btn btn-primary'>
                <i class='fa fa-save'></i>
                 Guarda

           </div>

           </div>

      </div>



</form>