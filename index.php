<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Convertir Euros a dolares</h1>
    <form method="POST" action="">
    
    <label for="euros">Euros: </label> <input type="number" name="eurdol">
    <label for="result" name="result"></label>
    <input type="submit" value="Enviar">
    </form>

    <h1>Convertir Euros a yenes</h1>
    <form method="POST" action="">
    
    <label for="euros">Euros: </label> <input type="number" name="euryen">
    <label for="result" name="result"></label>
    <input type="submit" value="Enviar">
    </form>

    <?php
    
    require("src/Conversor.php");
    
    if(isset($_POST["eurdol"])){

        $eur =intval($_POST["eurdol"]);
        $Conversor =new Conversor();
        $result= $Conversor->eurosADolares($eur);
        echo"<h2>$result <h2";
        $_POST["eurdol"]=null;
    }

    if(isset($_POST["euryen"])){

        $eur =intval($_POST["euryen"]);
        $Conversor =new Conversor();
        $result= $Conversor->eurosADolares($eur);
        echo"<h2>$result <h2";
        $_POST["euryen"]=null;
    }
    
    
    ?>
</body>
</html>