<?php

foreach ($sqlAlumnos as $alumnoview) { ?> 
     <br>
     <?php
     $alumnoview->id; 
     //$alumnoview->alumno;
     $alumnoview->nombre;
     $alumnoview->sexo;
}
?>
<table class="striped ">
    <thead class ="black white-text">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th></th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sqlAlumnos as $alumnoview) { ?>
            <tr>
                <td><?php echo $alumnoview->alumno; ?></td>
                <td><?php echo $alumnoview->nombre; ?></td>
                <td><?php echo $alumnoview->sexo; ?></td>
                <td>
                    <?php if ($alumnoview->sexo == 'M') { ?>
                        <i class = "material-icons prefix blue-text">male</i>
                    <?php } else { ?>
                        <i class = "material-icons prefix pink-text">female</i>
                    <?php } ?>
                </td>
                <td>
                    <button class="btn waves-effect waves-yellow red" type="submit" name="action">
                        <a href="?menu=deletealumno&idalumno=<?php echo $alumnoview->id; ?>">
                        <i class="material-icons right white-text">delete</i>
                    </button>
                    <button class="btn waves-effect waves-yellow green" type="submit" name="action">
                        <a href="?menu=editalumno&idalumno=<?php echo $alumnoview->id; ?>">
                        <i class="material-icons right white-text">edit</i>
                    </button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>