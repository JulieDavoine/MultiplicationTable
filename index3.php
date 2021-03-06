<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Table de Multiplication</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div id="test1">
        <h1>Atelier PHP</h1>
        <h4>Afficher une table de multiplication</h4>
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Tablemultiplication/index.html">Etape 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Tablemultiplication/index2.html">Etape 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Etape 3</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Etape 4</a>
                </li>
        </ul>
    </div>
    <div id="test2">
        <form method="post" action="">
            <label for="choix">Merci de sélectionner la table que vous voulez consulter :</label><br />
            <select class="elementselect" name="tables">
                <option value="1">Table du 1</option>
                <option value="2">Table du 2</option>
                <option value="3">Table du 3</option>
                <option value="4">Table du 4</option>
                <option value="5">Table du 5</option>
                <option value="6">Table du 6</option>
                <option value="7">Table du 7</option>
                <option value="8">Table du 8</option>
                <option value="9">Table du 9</option>
                <option value="10">Table du 10</option>
            </select>
            <div class="button">
                <input type="reset" value="Annuler">
                <input type="submit" name="envoyer" value="Envoyer"/> 
            </div>

            <?php  
            
                if(isset($_POST['envoyer']))
            {
                $random = mt_rand(1,10);
                $tables = $_POST['tables'];
                echo("Combien font ".$tables."x".$random." ?");
                echo("<input type='hidden' value='<?php echo($result); ?>' name='reponse'/>");
            }
            
                if(isset($_POST['reponse']))
            {                  
                $result = $tables*$random;
                $reponse = $_POST['reponse'];
                
                if($reponse == $result){
                    echo("Bonne réponse !");
                    
                }
                else{
                    echo("Mauvaise réponse !");
                }
            }
            ?>
            
        </form>  
    </div>
</body>
</html> 