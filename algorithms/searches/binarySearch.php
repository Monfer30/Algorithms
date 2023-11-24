<?php

//Binary search algorithm iterative approach
//Be careful collection must be ascending sorted, otherwise result will be unpredictable

/*
 * @param array $list
 * @param int $target
 * @return int 
 */

 function binarySearch($list,$target)
 {
    //inicializamos los indices
    $first = 0;
    $last = count($list) - 1;
   
    
    //Continúa el bucle de búsqueda binaria mientras el índice inicial sea menor o igual que el índice final
   
  while ($first <= $last) {
     //Calcula el índice medio del rango de búsqueda actual
    $mid = ($first + $last) >> 1;

     //Comprueba si el valor en el índice medio es igual al valor objetivo
    if ($list[$mid] == $target) {
      
       // Si los valores coinciden, devuelve el índice medio indicando la posición del valor objetivo
      return $mid;
    }
     // Si el valor en el índice medio es mayor que el valor objetivo, reduce el rango de búsqueda a la mitad inferior
    elseif ($list[$mid] > $target) {
      $last = $mid - 1;

     //Si el valor en el índice medio es menor que el valor objetivo, amplía el rango de búsqueda a la mitad superior
    
    } elseif ($list[$mid] < $target) {
      $first = $mid + 1;
    }
  }

  /*
   * Si el bucle termina sin encontrar el valor objetivo, devuelve null indicando que no está presente
   */
  return null;
}

 binarySearch([0, 5, 7, 10, 15], 5);