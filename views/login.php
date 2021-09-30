<?php 
  
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ?menu=login');
  }
  
  require './model/db.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: index.php?menu=inicio");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
?>
    <style>
        body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }
    
        main {
          flex: 1 0 auto;
        }
    
        body {
          background: #fff;
        }
    
        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
          color: #e91e63;
        }
    
        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
          border-bottom: 2px solid #e91e63;
          box-shadow: none;
        }
      </style>



    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


      <div class="section"></div>
      <main>
        <center>
          
          <div class="section"></div>
    
          <h5 class="indigo-text">Por favor, ingrese a su cuenta</h5>
          <div class="section"></div>
    
          <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
    
              <form class="col s12" method="post">
                <div class='row'>
                  <div class='col s12'>
                  </div>
                </div>
    
                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='' type='text' name='email' id='email' />
                    <label for='email'>Ingrese su usuario</label>
                  </div>
                </div>
    
                <div class='row'>
                  <div class='input-field col s12'>
                    <input class='' type='password' name='password' id='password' />
                    <label for='password'>Ingrese su contraseña</label>
                  </div>
                </div>
    
                <br />
                <center>
                  <div class='row'>
                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                  </div>
                </center>
              </form>
            </div>
          </div>
        </center>
        <div class="section"></div>
        <div class="section"></div>
      </main>
     
