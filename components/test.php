<?php

function hit_result($x_param, $y_param, $r_param){
//    $r_param = 1;
//    $x_param = -1;
//    $y_param = 0.5;


    //проверка, что у в пределах
    if ( !($y_param > -5 and 5 > $y_param) ) {
        return "invalid Y parameter";
    }
    // левая сторона графика
    if ($x_param <= 0) {
        // четвёртая четверть
        if ($y_param <= $r_param and $x_param <= $r_param and $y_param >= 0) {
            return "HIT";
        } else if ($x_param + $y_param >= -$r_param) { // третья четверть
            return "HIT";
        } else {
            return "MISS";
        }
    } else if ($y_param >= 0 and 4 * ($x_param * $x_param + $y_param * $y_param) <= $r_param * $r_param) {
        return "HIT";
    } else {
        return "MISS";
    }
}

