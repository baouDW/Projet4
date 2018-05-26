<?php
require('model.php');
//if(isset($_POST['texte']))
	//{
		$update= UptdatePost($_POST['titre'], $_POST['texte'], $_GET['id']);
	//}
//echo $_POST['titre'];
	//header('Location: adminView.php');
echo "ok".$_POST['titre']."". $_POST['texte']."". $_GET['id'];
?>

