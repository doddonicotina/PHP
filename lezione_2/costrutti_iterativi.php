<!DOCTYPE html>
<html lang="it">
<head>
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
        for ciclo <br>
    </p>

    <?php
       echo "<h3>Il for in php </h3>";
       $len = 10;
       $counter;
       for ($counter = 0; $counter <= $len; $counter++):
       
            echo "$counter <br> ";
       endfor;
       
    ?>
    <h1>
        Costrutto di iterazione indefinita: While
    </h1>

    <?php
    $total = 0;
    $i = 0;
    while ($total < $len ):
        $i++;
        $total += $i;
        echo "$total <br>";
    endwhile;
        ?>
  
</body>
</html>
