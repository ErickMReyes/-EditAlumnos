<?php
     session_start();

     require './model/db.php';
     
     
   
     if (isset($_SESSION['user_id'])) {
       $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
       $records->bindParam(':id', $_SESSION['user_id']);
       $records->execute();
       $results = $records->fetch(PDO::FETCH_ASSOC);
   
       $user = null;
   
       if (count($results) > 0) {
         $user = $results;
       }
     }
     

?>

    <?php if(!empty($user)): ?>
        <br> Welcome. <?= $user['email']; ?>
        <br>You are Successfully Logged In
        <a href="logout.php">
          Logout
        </a>
      <?php else: ?>
        <h1>Please Login or SignUp</h1>
  
        <a href="?menu=login">Login</a> or
        <a href="?menu=registro">SignUp</a>
      <?php endif; ?>