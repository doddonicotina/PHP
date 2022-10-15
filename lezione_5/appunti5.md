# Lezione 5
### Funzione explode 
Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.
``` php
explode(string $separator, string $string, int $limit = PHP_INT_MAX): array

```

esempio: 
``` php
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
```
risultato: 
 ![ Esempiio](https://github.com/doddonicotina/PHP/blob/main/images/Immagine%202022-10-15%20085226.png) 
