<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{
            font-family: Arial;
            font-weight: normal;
        }
        h2{
            font-family: Arial;
            font-weight: normal;
        }
        h3{
            font-family: Arial;
            font-weight: normal;
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio</title>
</head>
<body>
    <h1> Esercizio 1 </h1>
    <table style= border:solid, border="1", border: blue>
    <tr>
    <td>
        Paesi
    </td>
    <td>
        Capitali
    </td>
    </tr>
    <?php
       $capitali = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"); 
       asort($capitali);

       foreach ($capitali as $item=>$ass):
        echo "<tr> <td> $item </td> <td> $ass </td> </tr> ";
       endforeach;  
    ?>
    </table>
    <h1> Esercizio 2 </h1>
    <?php
        function ordinaVal_cresc(&$array)
        {
            echo "<h2> Ordinamento crescente in base al valore </h2> <br>
            ".asort($array);
        foreach($array as $item=>$ass):
            echo "<h3> $item: $ass </h3>";
        endforeach;
        echo "<br>";
        }

        function ordinaKey_cresc(&$array)
        {
            echo "<h2> Ordinamento crescente in base alla chiave </h2> <br>
        ".ksort($array);
        foreach($array as $item=>$ass):
            echo "<h3> $item: $ass </h3>";
        endforeach;
        echo "<br>";
        }

        function ordinaVal_decresc(&$array)
        {
            echo "<h2> Ordinamento decrescente in base al valore </h2> <br>
        ".arsort($array);
        foreach($array as $item=>$ass):
            echo "<h3> $item: $ass </h3>";
        endforeach;
        echo "<br>";
        }
        function ordinaKey_decresc(&$array)
        {
            echo "<h2> Ordinamento decrescente in base alla chiave </h2> <br>
        ".krsort ($array);
        foreach($array as $item=>$ass):
            echo "<h3> $item: $ass </h3>";
        endforeach;
        echo "<br>";
        }
        $array = array("Sheldon"=>"31","Leonard"=>"41","Howard"=>"39","Rajesh"=>"35");

        
        echo "<h2> Array di partenza: </h2> <br>";
        foreach($array as $item=>$ass):
            echo "<h3> $item: $ass </h3>";
        endforeach;
        echo "<br>";
        ordinaVal_cresc($array);
        ordinaKey_cresc($array);
        ordinaVal_decresc($array);
        ordinaKey_decresc($array);
    ?>

    <h1>Esercizio 3</h1>
    <?php
        function averageTemp(&$recordedTemperatures_arr)
        {
            $total = 0;
            foreach ($recordedTemperatures_arr as $item):
                $total += $item;
            endforeach;
            return $total/count($recordedTemperatures_arr);
        }
       $recordedTemperatures = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

       $recordedTemperatures_arr = explode(", ",$recordedTemperatures);
    

       $average = averageTemp($recordedTemperatures_arr);
       echo $average;

    sort($recordedTemperatures_arr);
       for($i=0;$i<5;$i++):
           $lowTemp[$i] = $recordedTemperatures_arr[$i];
       endfor;
    echo "<h3> Temperature basse </h3>";
       foreach ($lowTemp as $item):
        echo $item."<br>";
       endforeach;

    rsort($recordedTemperatures_arr);
       for($i=0;$i<5;$i++):
            $highTemp[$i] = $recordedTemperatures_arr[$i];
       endfor;

       

    
    echo "<h3> Temperature alte </h3>";
       foreach ($highTemp as $item):
        echo $item."<br>";
       endforeach;

       






    ?>
</body>
</html>