<?php
for ($i = 0; $i <= 10; $i++)
/*on déclare la variable de la table de multiplication, on dit qu'elle va jusqu'à dix et que c'est une boucle*/
{
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 10; $j++)/*définit la variable des nbr jusqu'à dix*/
    
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
        /* on affiche le nombre de la table choisit x les nombres jusqu'à dix = afficher le résultat de nbrmul x nbr*/
    }
    
}
?>