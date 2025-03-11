<?php

    // Inciso a)
    $x = 2;
    $y = 4;
    $res_a = (1 / $x) + (($x + $y) / 3) + (2 * ($x / $y));
    echo "Inciso a) Resultado: $res_a <br><br>\n"; // 3.5

    // Inciso b)
    $x = 3;
    $res_b = ((1/2) * $x + (3 + $x) / (2) * (2 * ($x ** 2))) / ((2 + 3) * $x);
    echo "Inciso b) Resultado: $res_b <br><br> \n"; // 3.7

    // Inciso c)
    $x = 2;
    $res_c = (sqrt((2 * $x) ** 2 + 3 ** 2) / 5) + sqrt($x ** 2);
    echo "Inciso c) Resultado: $res_c <br><br> \n"; // 3

    // Inciso d)
    $x = 2;
    
    $numerador = (1/2 + 1/4 + 1/8) * pow($x, 1/3);
    $denominador = (sqrt($x) / 2) + (3 * ($x ** 2) / 4);
    $res_d = $numerador / $denominador;
    echo "Inciso d) Resultado: $res_d <br><br> \n"; // 0.297

    // Inciso e)
    $x = 4;
    $res_e = sqrt((($x ** 2) / 2 + (1 / sqrt($x))) / (3 + (1/2) * ($x ** 3)));
    echo "Inciso e) Resultado: $res_e \n"; // 0.4928

?>

