<?php
$request = $bdd -> prepare("SELECT * FROM comments INNER JOIN user ON comments.id_user = user.id WHERE id_article = :id_article ORDER BY id DESC");
$request -> execute(['id_article' => $_GET['id_article']]);
while($row = $request -> fetch()){
  echo'
    <div class="col-sm-12 col-xl-12">
      <div class="panel panel-white post panel-shadow">

        <div class="post-heading">
          <div class="pull-left meta">
            <div class="title h5">
              <img src="uploads/'.$row['image'].'" class="img-circle avatar" alt="user profile image" style="width:100px;height:100px;">
              <b>'.$row['name'].' '.$row['firstname'].'</b>
            </div> 
          </div>
        </div> 

        <div class="post-description">';
        if($_SESSION['email'] == $row['email'] || $_SESSION['type'] == 'superuser'){
    echo' 
        <div class="stats" id="'.$row['id_comment'].'" style="float: right;">
            <a href="pages/delete-comment.php?id_comment='.$row['id_comment'].'&id='.$_SESSION['id'].'" class="btn btn-default stat-item"> 
              <img src="https://vignette.wikia.nocookie.net/starters/images/8/8c/Delete.png/revision/latest?cb=20140204025034&format=original" style="width:20px;height:20px;"></img></a> <a href="pages/update-comment.php?id_comment='.$row['id_comment'].'&id='.$row['id'].'&id_article='.$_GET['id_article'].'" class="btn btn-default stat-item"> 
              <img src="https://img.icons8.com/metro/1600/edit.png" style="width:20px;height:20px;"></img>
            </a>
          </div>';
        }

    echo'
          <p>'.$row['comment'].'</p>

        </div>

      </div><hr>
    </div>';
  }
?>