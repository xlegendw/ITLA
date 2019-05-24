<?php 

if($_POST){

    $persona = $_POST;
    core_persona::guardar($persona);
    redirect('main/personas');
} 
$personas = new stdClass;
$personas->cedula = '';
$personas ->nombre = '';
$personas->apellido = '';
$personas->genero = '';
$personas->tipigraficacion = '';
$personas->comentario = '';


if(isset($cedula)){
    echo "probar";
}


plantilla::aplicar();

?>

<h3> Editar Persona</h3>
<form method="post" action="">
      <div class='row'>
           <div class='col-md=6'>

           <?= asgInput('cedula','Cedula', $personas->cedula); ?>
           <?= asgInput('nombre','Nombre', $personas->nombre); ?>
           <?= asgInput('apellido','Apellido', $personas->apellido); ?>
           <?= asgInput('genero','Genero', $personas->genero); ?>
           <?= asgInput('tipigraficacion','Tipigraficacion', $personas->tipigraficacion); ?>
           <?= asgInput('comentario','Comentario', $personas->comentario); ?>
           <div class='text-center'>
               <button type="submit" class='btn btn-primary'>
                <i class='fa fa-save'></i>
                 Guardar
           </button>
           </div>
           </div>
      </div>

</form>