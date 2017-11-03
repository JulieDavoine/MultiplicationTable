<?php
if(isset($_POST['message']))
{
    $random = mt_rand(1,10);
    $tables = $_POST['tables'];
    echo("Combien font ".$tables."x".$random." ?");
    echo("<form method='post' action='choose.php'><input type='text' name='reponse'/><input type='submit' name='envoyer'></form>");
}

if(isset($_POST['envoyer']))
{   
    $random = mt_rand(1,10);
    $tables = $_POST['tables'];
    $result = $tables*$random;
    $reponse = $_POST['reponse'];
    echo("<br/>".$reponse."<br/>");
    echo("<br/>".$result."<br/>");
    
    if($reponse == $result)
    {    
        echo ("Bonne réponse !");
    }
    else
        echo("Mauvaise réponse !");
}

?>