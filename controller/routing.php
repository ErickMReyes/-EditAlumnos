<?php
      $var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'sesion';
      echo "<br>";
      switch ($var_getMenu) {
      case "inicio":
      require_once ('./views/home.php');
      break;
      case "acercade":
      require_once('./views/acercade.php');
      break;
      case "login":
      require_once('./views/login.php');
      break;
      case "registro":
      require_once('./views/registro.php');
      break;
      case "alumnos":
            include_once './model/alumnos.php';
            $sqlAlumnos = alumnos::consultar();
            
            include_once './views/viewalumno.php';
            break;
      case "deletealumno":
            $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
            // $_idalumno = isset($_GET['idalumno']) ? $_GET['idalumno'] : '0';
            require_once ('./model/alumnos.php');
            $sqlAlumnos = alumnos::delete($_idalumno);
            header("location: ./index.php?menu=alumnos");
            break;
      default:
      require_once('./views/sesion.php');
      }


?>