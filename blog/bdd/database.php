
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blog_car;charset=utf8', 'niksan', 'password');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "connect� ! " ;
	}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
		echo $e;
}




?>

