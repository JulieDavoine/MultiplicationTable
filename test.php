<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST['tables'])) :
    $randnumber = rand(1, 10);
    function print_calc($tables, $randnumber)
    {
        $result = $randnumber * $tables;
        echo("Combien font ".$tables."x".$randnumber."?");
        return ($result);
    }
    $res = print_calc($_POST['tables'], $randnumber);
    ?>
    <form method="POST" action="">
        <input type="hidden" name="res" value="<?php echo $res; ?>">
        <input type="text" name="rep" placeholder="rep ici">
    </form>
    
    <?php elseif(isset($_POST['rep'])) :

    function test_solver($res, $rep)
    {
        if($rep == $res)
            echo "T'es trop fort !";
        else
            echo "Loupé !";
    }
    test_solver($_POST['res'], $_POST['rep']);
    ?>

    <?php else : ?>
    <form method="POST" action="">
        <label>label</label>
        <select name="tables">
            <option value="1">table de 1</option>
            <option value="2">table de 2</option>
            <option value="3">table de 3</option>
            <option value="4">table de 4</option>
            <option value="5">table de 5</option>
            <option value="6">table de 6</option>
            <option value="7">table de 7</option>
            <option value="8">table de 8</option>
            <option value="9">table de 9</option>
            <option value="10">table de 10</option>
        </select>
        <input type="submit" name="message" value="Send">
    </form>
    <?php endif ?>
</body>
</html>