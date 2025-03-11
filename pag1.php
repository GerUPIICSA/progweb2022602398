<?php
    function suma($a, $b){
        return $a + $b;
    }

    #Código que se ejecuta inmediatamente 
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = suma($a,$b);
    


?>

<html>
    <head>
        <title>Suma de dos números</title>
    </head>

    <body>
        <p><?php echo $a;?> + <?php echo $b;?>
         = <?php echo $c;?></p>
    </body>
</html>