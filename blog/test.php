<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8" >
  <title>Les résultats de recherche</title>
 </head>
 <body>
 //On crée le formulaire et un champ texte avec comme nom : nomEntree
<form method="post">
    <input type="text" id="search" name="search">
    <input type="submit" name="form" value="Rechercher">
</form>
   <?php
 include 'bdd/database.php';
      global $bdd;  
 if(isset($_POST['form'])) {
  extract($_POST);


  $req=$bdd->prepare("SELECT * FROM articles WHERE title LIKE :word OR description LIKE :word");
  $req->execute(['word' => '%'.$search.'%']);
  $article = $req -> fetch();
  echo $article['title'];
  echo '</br>';
  echo $article['description'];
 }
   ?>
 </body>
</html>