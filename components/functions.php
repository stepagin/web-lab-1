<?php
function check_numbers($r_param, $x_param, $y_param) {
    if (is_numeric($r_param) and is_numeric($x_param) and is_numeric($y_param))
        return true;
    else
        return false;
}

function get_option($name){
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $defaults = array(
        "r_param" => "undefined",
        "y_param" => "undefined",
        "x_param" => "undefined"
    );
    if(isset($data[$name])){
        return $data[$name];
    } else {
        return $defaults[$name];
    }
}

function hit_result(): string
{

    $x_param = get_option("x_param");
    $y_param = get_option("y_param");
    $r_param = get_option("r_param");

    //проверка, что числа определены
    if(check_numbers($x_param, $y_param, $r_param)){
        if ( !($y_param > -5 and 5 > $y_param)) {
            return "invalid Y parameter";
        }

        if ($x_param <= 0) {// левая сторона графика

            if ($y_param >= 0) {// четвёртая четверть
                 if ($y_param <= $r_param and -$x_param <= $r_param) {
                     return "HIT";
                 } else {
                     return "MISS";
                 }
            } else { // третья четверть
                if ($x_param + $y_param >= -$r_param) {
                    return "HIT";
                } else {
                    return "MISS";
                }
            }
        } else // правая сторона графика
            if ($y_param >= 0 and 4 * ($x_param * $x_param + $y_param * $y_param) <= $r_param * $r_param)// первая четверть
        {
            return "HIT";
        } else { // вторая четверть
            return "MISS";
        }
    } else
        return "invalid input" . " " . $x_param . " " . $y_param . " " . $r_param;
}
