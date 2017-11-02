<?php
$random = mt_rand(1,10);
$tables = $_POST['tables'];
echo ("Combien font ".$tables."x".$random." ?");
echo ("<form method='post'><input type='text' name='reponse'/></form>");

// $reponse = $_POST['reponse'];
// echo $reponse;
?>