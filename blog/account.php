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
?>
<!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> CAR BLOG</title>

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
                 echo'<li class="nav-item">
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

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://archive-media-0.nyafuu.org/wg/image/1470/37/1470372074213.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Mon compte</h1>
              <span class="subheading"></span>
            </div>
          </div>
        </div>
      </div>
    </header>

  <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto col-xl-10">

          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <?php
                    $request = $bdd -> prepare("SELECT name, firstname, email, image FROM user WHERE id = :id_user" );
                    $request -> execute(['id_user' => $id]);
                    $result = $request -> fetch();
                    $request->closeCursor();

                    $countComment = $bdd -> prepare("SELECT COUNT(comment) AS comment FROM comments WHERE id_user=:id_user");
                    $countComment -> execute(['id_user' => $id]);
                    $resultCountComment = $countComment -> fetch();
                    $countComment->closeCursor();

                    
                    $imageUrl = 'uploads/'.$result['image'];
                  ?>             
                  <div class="card-body">
                    <div class="card-title mb-4">
                      <div class="d-flex justify-content-start">
                        <div class="image-container">
                          <img src="<?php echo $imageUrl ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                          <div class="middle">

                          </div>
                        </div>
                        <div class="userData ml-3">
                          <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"> <?php echo $result['name'].' '.$result['firstname']?></a></h2>
                          <h6 class="d-block"></h6>
                          <h6 class="d-block"><?php echo $resultCountComment['comment']; ?> Commentaires</h6>
                        </div>
                        <div class="ml-auto">
                          <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Mes Infos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Commentaires</a>
                          </li>
                        </ul>
                        <div class="tab-content ml-1" id="myTabContent">
                          <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">

                            <?php
                            echo'
                            <div class="row">
                              <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-weight:bold;">Image</label>
                              </div>
                              <div class="col-md-8 col-6">
                                <form action="pages/upload-image.php?name='.$result['name'].'" method="post" enctype="multipart/form-data">
                                  <input type="file" name="file">
                                  <input type="submit" name="submit" value="Telecharger">
                                </form> 
                              </div>
                            </div>
                            <hr/>
                            <form method="post" novalidate>
                              <div class="row">
                                <div class="col-sm-3 col-md-2 col-5">
                                  <label style="font-weight:bold;">Name</label>
                                </div>
                                <div class="col-md-8 col-6">
                                  <input type="text" name="name" value="'.$result['name'].'">
                                </div>
                              </div>
                              <hr />

                              <div class="row">
                                <div class="col-sm-3 col-md-2 col-5">
                                  <label style="font-weight:bold;">Prénom</label>
                                </div>
                                <div class="col-md-8 col-6">
                                  <input type="text" name="firstname" value="'.$result['firstname'].'">
                                </div>
                              </div>
                              <hr/>


                              <div class="row">
                                <div class="col-sm-3 col-md-2 col-5">
                                  <label style="font-weight:bold;">Email</label>
                                </div>
                                <div class="col-md-8 col-6">
                                  <input type="email" name="email" value="'.$result['email'].'">
                                </div>
                              </div>
                              <hr/>
                            ';
                            ?>
                              <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Mettre à jour" name="formsend">
                              </div>
                            </div>
                          </form>
                          <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                            <main class="container pt-5">
                              <div class="card mb-5">
                                <div class="card-header">Tout vos commentaires</div>
                                <div class="card-block p-0">
                                  <table class="table table-bordered table-sm m-0">
                                    <thead class="">
                                      <tr>
                                        <th></th>
                                        <th>Article</th>
                                        <th>Commentaire</th>
                                        <th>Date</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <label class="custom-control custom-checkbox">
                                            <input type="checkbox" id="checkAll">
                                            <td>Tout Sélectionner</td>
                                            <span class="custom-control-indicator"></span>
                                          </label>
                                        </td>
                                      </tr>
                                      <?php
                                        $request = $bdd -> prepare("SELECT id_comment, title, comment, date_comment, comments.id_user FROM comments INNER JOIN articles ON comments.id_article = articles.id_article WHERE comments.id_user = $id" );
                                        $request -> execute(['id' => $id]);
                                        while($row = $request -> fetch()){
                                          echo'
                                            <tr>
                                              <td>
                                                <label class="custom-control custom-checkbox">
                                                  <input id='.$row['id_comment'].' type="checkbox" name="oui" class="case">
                                                  <span class="custom-control-indicator"></span>
                                                </label>
                                              </td>
                                              <td>'.$row['title'].'</td>
                                              <td>'.$row['comment'].'</td>
                                              <td>'.$row['date_comment'].'</td>
                                            </tr>
                                          ';
                                        }
                                        $request->closeCursor();
                                      ?>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="card-footer p-0">
                                  <nav aria-label="...">
                                    <ul class="pagination justify-content-end mt-3 mr-3">
                                      <li class="page-item">
                                        <a class="page-link" id="delete">Supprimer</a>
                                      </li>
                                      </ul>
                                  </nav>
                                </div>
                              </div>
                            </main>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <hr>
<?php
  if(isset($_POST['formsend'])){
    extract($_POST);
    if(!empty($name) || !empty($firstname) || !empty($email)){

      $update=$bdd->prepare('UPDATE user SET name = :name, firstname = :firstname, email = :email WHERE id = :id_user');
      $update->execute(array(
            'name' => $name,
            'firstname' => $firstname,
            'email' => $email,
            'id_user' => $id
          ));
      if($update == true){    
        echo'<h2> Vous avez modifié !</h2>';
      }                      
      else  {  
        echo '<h2> Probleme email </h2>';
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script> 
  $(document).ready(function() {
    $('#checkAll').click(function(){
      if(this.checked){
        $('.case').each(function(){
          this.checked = true;
        });
      }else{
        $('.case').each(function(){
          this.checked = false;
        });
      }
    });

    $('#delete').click(function(){
      var dataArray = new Array();
      if($('.case:input:checkbox:checked').length > 0){
        $('.case:input:checkbox:checked').each(function(){
          dataArray.push($(this).attr('id'));
          $(this).closest('tr').remove(); 
        });
        sendResponse(dataArray);
        console.log(dataArray);
      }
    });

    function sendResponse(dataArray){
      $.ajax({
        type    : 'POST',
        url     : 'pages/del-all-comment.php',
        data    : { 'data': dataArray },  
        success  : function(response){
                    alert(response);
                  },
        error   : function(errResponse){
                    alert(errResponse);
                  }
      });
    }

  });
</script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>
