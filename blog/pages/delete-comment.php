<?php
  session_start();
  if(isset($_SESSION['email'])){
    $id = $_SESSION['id'];
    include '../bdd/database.php';
    global $bdd;  
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
        <a class="navbar-brand" href="../index.php">
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
      </div>
    </header>
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form method="post"  novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Supprimer l'article</label>
                <input type="password" name="password" class="form-control" placeholder="Rentrez votre mot de passe pour supprimer earticle" id="password">
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Supprimer l'article" name="formsend">
            </div>
            
          </form>
        </div>
      </div>
    </div> 

    <hr>
    <?php
    if(isset($_POST['formsend'])){
      extract($_POST);
      if(!empty($password)){

        $req=$bdd->prepare("SELECT id, password, id_comment, email FROM user INNER JOIN comments ON user.id = comments.id_user WHERE id = :id AND id_comment = :id_comment ");
        $req->execute([
          'id'=> $_GET['id'],
          'id_comment' => $_GET['id_comment']
        ]);
        $result = $req -> fetch();

        if($result == true){
          if($result['password'] == sha1($password))
          {    
            $delComment=$bdd->prepare('DELETE FROM comments WHERE id_comment = :id_comment');
            $delComment->execute(array(
              'id_comment' => $_GET['id_comment']
            ));
            $delComment->closeCursor();
            header('Location: ../index.php'); 
          }

          else {
            echo '<h1>Mot de passe incorrecte</h1>';
          } 
        }
        //The comment doesn't belong to the user
        else{
          echo'Ceci n\'est pas votre commentaire';
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
    <script src="../js/clean-blog.min.js"></script>
  </body>
</html>
