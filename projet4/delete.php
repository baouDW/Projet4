<?php 
require('model.php');
$delete=deletePost($_GET['id']);
header('Location: adminView.php');
?>