<?php

/**
 * 
 * @param unknown $max
 * @return number
 */
function fibonacci($max)
{
    $serie[0] = 0;
    $serie[1] = 1;
    $i = 2;
    $next = $serie[$i - 1] + $serie[$i - 2];
    
    
    while ($next <= $max) {
        $serie[$i] = $next;
        $i ++;
        $next = $serie[$i - 1] + $serie[$i - 2];
    }
    
    return $serie;
}