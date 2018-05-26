<?php
require('model.php');
//if(isset($_POST['texte']))
	//{
		$insertPost= insertPost($_POST['titre'], $_POST['texte']);
	//}
//echo $_POST['titre'];
	header('Location: adminView.php');

?>

