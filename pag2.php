<?php

    $x = 4;

    $resultado = sqrt(
    (
        ($x ** 2) / 2 
        + 1 / sqrt($x)
    ) 
    / 
    (
        3 + 0.5 * ($x **3)
    )
    );

    echo $resultado;


?>