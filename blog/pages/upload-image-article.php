 <form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file">
  <input type="submit" name="submit" value="Telecharger">
</form> 
<?php

  session_start();
  if(isset($_SESSION['email'])){
    $id = $_SESSION['id'];
    include '../bdd/database.php';
    global $bdd;  
  }
  else if(!isset($_SESSION['email'])){
    session_destroy();
    header('Location: login.php');
  }
$statusMsg = '';

// File upload path
$targetDir = "../uploads/";
$fileName = basename(date('Y/m/d-H:i-').$id.'-'.$_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"])){
  // Allow certain file formats
  $allowTypes = array('jpg','png','jpeg','gif');
  if(in_array($fileType, $allowTypes)){
    // Upload file to server
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    echo $fileName;
  }
  else{
    $statusMsg = 'Only jpeg or png file';
  }
}
// Display status message
echo $statusMsg;
?>