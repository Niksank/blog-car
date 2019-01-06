<?php
  session_start();
  if(isset($_SESSION['email'])){
    if($_SESSION['type'] == 'superuser'){
      $id = $_SESSION['id'];
      include '../bdd/database.php';
      global $bdd;  
    }
    else{
      header('Location: ../index.php');
    } 
  }
  else if(!isset($_SESSION['email'])){
    session_destroy();
    header('Location: ../login.php');
  }
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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">
        Auto Blog
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../auto.php">Essai Auto</a>
            </li>
            <?php 
              if($_SESSION['type'] == 'superuser'){
              echo' <li class="nav-item">
              <a class="nav-link" href="../admin.php">Administrateur</a>
            </li>';  
              }
            ?>
           
            <li class="nav-item">
              <a class="nav-link" href="../account.php">Mon compte</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="../logout.php">Deconnexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>	  
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Ajouter un article</h1>
              <span class="subheading"> </span>
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
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form method="post" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Titre</label>
                <input name="title" type="text" class="form-control" placeholder="Titre" id="title" required data-validation-required-message="Veuillez rentrer votre nom">
                <p class="help-block text-danger"></p>
              </div> 
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Sous-titre</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Sous-titre" id="subtitle" required data-validation-required-message="Veuillez rentrer votre prénom">
                <p class="help-block text-danger"></p>
              </div> 
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Categorie</label>
                <input type="text" name="category" class="form-control" placeholder="Categorie" id="category" required data-validation-required-message="Veuillez rentrer la categorie">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Description</label>
                <textarea name="description" id="description" class="form-control" cols="40" rows="5" placeholder="Rentre ici la description"></textarea>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Ajouter l'article" name="formsend">
            </div>
          </form>
        </div>
      </div>
    </div> 

    <hr>
    <?php
   
    if(isset($_POST['formsend'])){
     extract($_POST);
      if(!empty($title) && !empty($subtitle) && !empty($category) && !empty($description)){

        $req=$bdd->prepare("SELECT * FROM user WHERE email = :email");
        $req->execute(['email'=> $_SESSION['email']]);
        $result = $req -> fetch();
        if($result == true){    
          $q=$bdd->prepare('INSERT INTO articles(title, description, id_user, post_text, category) VALUES(:title, :description, :id_user, :post_text, :category)');
              
          $q->execute(array(
            'title' => $title,
            'description' => $subtitle,
            'id_user' => $_SESSION['id'],
            'post_text' => $description,
            'category' => $category
          ));
          echo'<h2> Vous avez ajouté !</h2>';
        }
                                
        else if($result == false) {  
          echo '<h2> oui </h2>';
        } 
       
        else {
          echo '';
        }
      }

      else{
        echo'<h2>Remplir tous les champs</h2>';
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>

  </body>

</html>
