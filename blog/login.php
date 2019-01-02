<?php 
  include 'bdd/database.php';
  global $bdd;  
?>  

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Car</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">
        Auto Blog
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
    </div>
    </nav>    
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Connectez vous!</h1>
              <span class="subheading"> Pour accéder au news de l'auto </span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p></p>
          <form name="sentMessage" method="post" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="email@domaine.fr" id="email" required data-validation-required-message="Veuillez rentrer votre email" required>
                <p class="help-block text-danger"></p>
              </div> 
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="mot de passe" id="password" required data-validation-required-message="Veuillez entrer un mot de passe." required>
                <p class="help-block text-danger"></p>
              </div>
            </div>
           
            <br>
            <div id="success"></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Se connecter" name="formlogin" id="userConnectionButton" >
            </div>
            <div class="form-group">
              <a href="inscription.php" >
                <span type="text" class="btn btn-primary" name="formlogin" id="inscription"> S'inscrire</span>
              </a> 
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>
    <?php

      if(isset($_POST['formlogin'])) {
        extract($_POST);

        if(!empty($email) && !empty($password)) {
          $q=$bdd->prepare("SELECT * FROM user WHERE email = :email");
          $q->execute(['email' => $email]);
          $result = $q -> fetch();

          if($result == true) {
            if(sha1($password) == $result['password']){
              session_start ();
              $_SESSION['email'] = $result['email'];
              $_SESSION['type'] = $result['type'];
              $_SESSION['id'] = $result['id'];
              $_SESSION['type'] = $result['type'];
              header('Location: index.php');
              exit();
            }
            else{
              echo "Le mot de passe est incorrecte !";
            }
          }  
        }
        else {
          echo"Veuillez completer l'ensemble des champs"; 
        }
      }
    ?>
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <p class="copyright text-muted">@MDS PROJECT SQL</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
