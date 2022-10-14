# lezione_4


## Creiamo una funzione che calcoli la data 

La variabile data_oggi è locale allo script ma non è visibile alla funzione 

 ```php
            function calcolaData()
            {
               echo "La data calcolata = ".$data_oggi;     
            }
```


Quindi faremo così

```php
function calcolaData($temp)
            {
               echo "La data calcolata = ".$temp;     
            }
```
# Funzione implode
## dato un array mi consente di ottenere una stringa in cui gli elementi sono separaty da un carattere che scegliamo

``` php
    $str = implode("*", $array);
```
come primo parametro passiamo il carattere se paratore e quindi ``` "*" ``` e come secondo il vettore da dividere o appunto "implodere"
``` $array ```
### L'utilizzo di questo file è inteso con il codice scritto nella stessa gironata
