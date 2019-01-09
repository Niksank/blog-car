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

    <title> CAR BLOG </title>

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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="auto.php">Essai Auto</a>
            </li>
            <?php 
              if($_SESSION['type'] == 'superuser'){
              echo' <li class="nav-item">
              <a class="nav-link" href="admin.php">Administrateur</a>
            </li>';  
              }
            ?>
           
            <li class="nav-item">
              <a class="nav-link" href="account.php">Mon compte</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="logout.php">Deconnexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" style="background-image: url('../img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10">
            <div class="post-heading">s
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- body -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Rechercher</label>
                <input name="search" type="text" class="form-control" placeholder="Entrez ce que vous rechercher" id="search">
              </div> 
            </div>
            <br>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Ajouter l'utilisateur" name="form">
            </div>
          </form>  
          <?php
         if(isset($_POST['form'])) {
          extract($_POST);
          $request = $bdd -> prepare("SELECT * FROM articles WHERE title LIKE :word OR description LIKE :word OR post_text LIKE :word");
          $request -> execute(['word' => '%'.$search.'%']);
          while($row = $request -> fetch()){
            echo'
                  <div class="post-preview">
                    <a href="post.php?id_article='.$row['id_article'].'">
                      <h2 class="post-title">'.$row['title'].'</h2>
                      <h3 class="post-subtitle">'.$row['description'].'</h3>
                     </a>
                    <p class="post-meta">Publié par
                    <a href="#">'.$row['title'].' </a> le '.$row['date'].'</p>
                  </div>
                  <hr>';
          }
        } 
        ?>
        </div>
      </div> 
    </div>
          
        
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p class="copyright text-muted"> @PROJECT MDS MYSQL</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
