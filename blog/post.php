<?php
  session_start();
  if(isset($_SESSION['email'])){
    $id = $_SESSION['id'];
    include 'bdd/database.php';
    global $bdd;  
  }
  else if(!isset($_SESSION['email'])){
    session_destroy();
    header('Location: login.php');
  }

  if (isset($_GET['id_article'])) {
  }
  else {
    echo 'Renseigner le id de l\'article';
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/comment-box.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="css/clean-blog.min.css" rel="stylesheet">
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

  <?php
    $request = $bdd -> prepare("SELECT * FROM articles INNER JOIN user ON articles.id_user = user.id WHERE id_article = :id_article");
    $request -> execute(['id_article' => $_GET['id_article']]);
    $result = $request -> fetch();  
    $request -> closeCursor();
  ?>

    <header class="masthead" style="background-image: url('<?php echo $result['article_image'];?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $result['title']?></h1>
              <h2 class="subheading"><?php echo $result['description'];?></h2>
              <span class="meta">Publié par
                <a href="#"><?php echo $result['name']?></a>
                le <?php echo $result['date']?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p> <?php echo $result['post_text']?> </p>
          </div>
        </div>
      </div>
    </article>

    <hr>
   <?php 
      if($_SESSION['type'] == 'superuser'){
        echo' 
    <div>
      <a class="btn btn-primary float-left" href="pages/update-article.php?id_article='.$_GET['id_article'].'">Modifier l\'article</a>
    </div>

    <div>
      <a class="btn btn-primary float-right" href="pages/delete-article.php?id_article='.$_GET['id_article'].'"> Supprimer l\'article</a>
    </div>';  
        }
    ?> 

<!-- Comment box -->
    <div class="container pb-cmnt-container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xl-12">
            <div class="panel panel-info">
                <div class="panel-body">
                  <form method="post" class="form-inline">
                    <textarea name="comment" placeholder="Laisse un commentaire ! ;)" class="pb-cmnt-textarea"></textarea>
                    
                        <input type="submit" class="btn btn-primary" value="Envoyer" name="formsend">
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>

    <?php
      if(isset($_POST['formsend'])){
        extract($_POST);
        if(!empty($comment)){
          $req=$bdd->prepare("SELECT * FROM user WHERE email = :email");
          $req->execute(['email'=> $_SESSION['email']]);
          $result = $req -> fetch();
          if($result == true){    
            $q=$bdd->prepare('INSERT INTO comments(comment, id_user, id_article) VALUES(:comment, :id_user, :id_article)');
            $q->execute(array(
              'comment' => $comment,
              'id_user' => $_SESSION['id'],
              'id_article' => $_GET['id_article']
            ));
            echo'<h2> Vous avez ajouté !</h2>';
            
            $q->closeCursor();
          }
        }
        else{ echo'erreur';}
      }
    ?>
<!-- /Comment box -->
    <hr>
    <!-- /All comment -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xl-12">
        <h1> Commentaires </h1> 
      </div>
        <?php
        include 'pages/comment.php';
        ?>
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
    <script src="js/clean-blog.min.js"></script>

  </body>
</html>
