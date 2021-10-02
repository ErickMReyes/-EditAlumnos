<?php

include 'conectaDB.php';

class alumnos {
    public $id;
    public $alumno;
    public $nombre;
    public $sexo;

    public function __construct($id, $alumno, $nombre, $sexo) {
        $this->id = $id;
        $this->alumno = $alumno;
        $this->nombre = $nombre;
        $this->sexo = $sexo;

        
    }
    public static function consultar() {
        $mysqli = conectaDB::dbmysql();
        $consulta    = "select * from alumnos";
        echo ('<br>');
        //echo ($consulta);
        $resultado   = mysqli_query($mysqli, $consulta);
        if (!$resultado){
            echo 'No pudo seleccionar la base de datos';
          exit;
        }
        $listaAlumnos = [];
        while ($alumno = mysqli_fetch_array($resultado)) {
            $listaAlumnos[] = new alumnos($alumno['id'], $alumno['alumno'],$alumno['nombre'], $alumno['sexo']);
        }
        
        //$mysqli->close;
        return $listaAlumnos;
        
    
    }
    public static function delete($_idalumno) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('DELETE FROM alumnos WHERE id = ? ');
        $stmt->bind_param('i', $_idalumno);
        $stmt->execute();
        $resultado = $stmt->get_result();
        }

    public static function consultaralumno($_idalumno){
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT * FROM alumnos WHERE id=?');
        $stmt->bind_param('i', $_idalumno);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $fila = $resultado->fetch_array();
        return $fila;
    }
    public static function update($_alumno,$_nombre,$_sexo,$_id){
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('UPDATE alumnos SET alumno=?, nombre=?, sexo=? WHERE id=?');
        $stmt->bind_param('sssi', $_alumno,$_nombre,$_sexo,$_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $acceso=false;
        if($stmt->affected_rows == 1){
            $acceso = true;
        }
        $mysqli->close();
        return $acceso;
    }

}






?>

