<?php
foreach($_POST["tables"] as $variable)
    for($i=0; $i <= 10; $i++)
    {
        echo ($i."x".$variable."=".$i*$variable."</br>");
        if($i==10){
            echo ("</br>");
        }      
    }
?>
