<?php 
$co = mysqli_connect('localhost','niksan','password','blog_car');
  if(isset($_POST['data'])){
    $dataArray = $_POST['data'];
    foreach($dataArray as $id){
      mysqli_query($co, "DELETE FROM comments WHERE id_comment = $id"); 
    }
    echo 'Reussie';
  }
?>