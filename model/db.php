<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'demouac';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_db;", $db_user, $db_password);
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
  }


  /*if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }*/

  // 'Success: A proper connection to MySQL was made.';
  //echo '<br>';
  //echo 'Host information: '.$mysqli->host_info;
  //echo '<br>';
  //echo 'Protocol version: '.$mysqli->protocol_version;

  //$mysqli->close();
?>