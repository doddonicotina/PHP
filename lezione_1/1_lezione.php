<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paginaTest</title>
    <style>
        p {font-family: Arial, Helvetica, sans-serif;}
        h3 {font-family: Arial, Helvetica, sans-serif;}
    </style>


</head>
<body>
    <p>
        Inseriamo tag PHP <br>
    </p>

    <?php
        echo "<h3>HelloWorld</h3>"."<br>";
        echo "<h3> Today is ".date('l jS \of F Y h:i:s A')." </h3>"
    ?>
   <p>
        Le variabili <br>
    </p>
    <?php
        $a = 1;
        $a = $a+$a;
        echo "<h3> La variabile a vale: $a </h3><br>";

        var_dump($a);
        
        if (is_int($a))
        {
            $a = 23 + $a;
            echo "<h3>now a is $a<br></h3>";
        }
        else
        {
            echo "<h3>a still tha same</h3>";
        }

        if (is_bool($a)):
            echo "<h3> a is bool</h3>";
        else:
            echo "<h3>a not bool</h3>";
        endif;
        
    ?> 
    <h3>
        AREA DEL CERCHIO
    </h3>
        <?php
            $d = 5;
            $r = $d/2;
            define('PI', 3.14);

            echo "Area cerchio raggio: ".PI*$r*$r;
        ?>
   
</body>
</html>
