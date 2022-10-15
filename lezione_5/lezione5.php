<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $str = "pippo pluto ciccio topolino";
        echo "<h3>$str</h3>";

        $nomi = explode( " " , $str);

        $i = 0;
        echo "<ul>";
        foreach($nomi as $item)
        {
            $i++;
            echo "<li> $i) $item </li>";    
        }
        echo "</ul>";





    ?>
</body>
</html>