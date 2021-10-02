<?php 
  require './model/db.php';
  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'] )) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


    <div class="container">
        <div class="row">
            <form action="?menu=registro" method="POST" class="col s12" id="reg-form">
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" name="email" type="email" class="validate" required>
                  <label for="email">Correo</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="password" name="password" type="password" class="validate" minlength="6" required>
                  <label for="password">Contraseña</label>
                </div>
              </div>
              <div class="row">
                
        
                <div class="input-field col s6">
                  <button class="btn btn-large btn-register waves-effect waves-light indigo" type="submit" value="Submit" name="action">Registrar
                    
                  </button>
                </div>
              </div>
            </form>
          </div>
          
        </div>
        
    <script>
        $(document).ready(function() {
        $('select').material_select();
        });
    </script>
