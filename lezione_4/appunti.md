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


### L'utilizzo di questo file è inteso con il codice scritto nella stessa gironata
