<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table{
            border: 2px solid;
            border-color: blue;
            border-radius: 6px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        Array numerici 
    </h3>
    <?php 
        $vett[0] = "pippo";
        $vett[1] = "ciccio";

        for ($i = 0; $i< count($vett);$i++):
            echo "$i) $vett[$i] <br>";
        endfor;
    ?>
    <?php
            echo "<table>";
            for ($i = 0; $i< count($vett);$i++):
                echo "    
                
                <tr>
                <td> $i </td>
                <td>  $vett[$i] </td>
                </tr> 
                <br>
                    ";

            endfor; 
            echo "</table>";




            $p = array("Oggi", "domani", 1,2,3, 'a',"B");
            if (is_array(($p))):
                var_dump($p);
            endif;

            if (is_array(($p))):
                print_r($p);
            endif;


            $nomi = array("Giovanni","Domenico","Sara","Giuseppe");
            $eta = array(17,18,14,16);
            echo "<table>";
            foreach ($nomi as $val ):
                echo "
                
                <th>
                    $val
                </th>
               
                ";
                $val++;
            endforeach;
            echo "<tr>";
            foreach ($eta as $val ):
                echo "
                
                <td>
                    $val
                </td>
                
                ";
                $val++;
            endforeach;
            echo "</tr><br>";
            echo "</table> <br>" ;



            echo "<h1> ARRAY ASSOCIATIVI </h1>";
            $autori = array("Einstein"=>"relatività",
             "Avogadro"=> "Numero di moli",
              "Galvani"=>"Pila",
              "Codd"=> "Modello relazionale database");
              print_r($autori);
              echo "<table>";
              foreach($autori as $key=>$value):
                echo "<tr><td>$key</td><td>$value</td></tr>";
              endforeach;
              echo "</table> <br>";


              ksort($autori);
              echo "<table>";
              foreach($autori as $key=>$value):
                echo "<tr><td>$key</td><td>$value</td></tr>";
              endforeach;
              echo "</table><br>";


              asort($autori);
              echo "<table>";
              foreach($autori as $key=>$value):
                echo "<tr><td>$key</td><td>$value</td></tr>";
              endforeach;
              echo "</table><br>";
              ?>
   
</body>
</html>
