<?php

?>
<form action="./controller/update.php" method="POST">
    <input type="text" name="id" value="<?php echo $sqlAlumnos['id'] ?>">
    <input type="text" class="fomr-control mb-3" name="alumno" placeholder="alumno" value="<?php echo $sqlAlumnos['alumno'] ?>">  
    <input type="text" class="fomr-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $sqlAlumnos['nombre'] ?>">
    <input type="text" class="fomr-control mb-3" name="sexo" placeholder="sexo" value="<?php echo $sqlAlumnos['sexo'] ?>">
    
    <input type="submit" class="btn btn-primary btn-block indigo" value="Actualizar">
    <br>
    
</form>