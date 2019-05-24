<?php

function asgInput($nombre,$label,$valor=''){
    return <<<CODIGO
    <div class="form-group input-group">
    <label>{$label}:</label>
    <input type='text' value='{$valor}' class='form-control' name='{$nombre}'/>

    </div>
CODIGO;
}
