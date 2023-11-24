<?php

// LINEAR SEARCH

//Dada una matriz de n elementos, escriba una función para buscar el índice de un elemento determinado (destino)

$list = [3, 8, 7, 1, 9, 15, 45, 20, 78];
$target = 9;

//definimos la funcion que recibe 2 parametros
function linearSearch($list, $target)
{
    //almacenamos el tamaño de la lista en la variable "n"
    $n = sizeof($list);
    //iteramos con el primer elemento de la matriz
    for ($i=0; $i < $n; $i++) { 
        //lo comparamos con el elemento objetivo($target)
        if ($list[$i] == $target) {
            //si es igual al elemento destino, devolvemos el indice
            //de lo contrario seguimos iterando
            return $i + 1;
            //indice + 1 = num de posicion
        }
    }

    return "error";
}


// BINARY SEARCH

