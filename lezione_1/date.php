<!DOCTYPE html>
<html lang="it">
<head>set="UTF-8">
    <meta http-equiv="X-UA-Compatib
    <meta chale" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paginaTest</title>
    <style>
        p {font-family: Arial, Helvetica, sans-serif;}
        h3 {font-family: Arial, Helvetica, sans-serif;}
    </style>


</head>
<body>
    <p>
        Date  PHP <br>
    </p>

    <?php
        date_default_timezone_set('Europe/Rome');
        echo "<h3>Siamo in Italia, sono le: </h3>". date("H:i:s")."<br>";
        date_default_timezone_set('America/New_York');
        echo "<h3>Siamo a New York, sono le: </h3>". date("H:i:s")."<br>";
    
    ?>

    <form method="post">
     Inserisci continente e città in inglese e ti dirò che ore sono, es: Europe/Rome = <input type="text" location="location"><br>
     <input type="submit">   
    </form>
    <?php
        date_default_timezone_set($_POST["location"]);
        echo "<h3> Sono le </h3>".date("H:i:s");
    ?> 
    
    <h1>
        Costrutto di iterazione indefinita: While
    </h1>

    <?php
    $total = 0;
    $i = 0;
    while ($total < $N ):
        $i++;
        ?>
    
    
   
</body>
</html>
