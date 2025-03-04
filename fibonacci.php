<html>

<head>
    <title>Fibonacci</title>
</head>

<body>
    <?php
    $n1 = 0;
    $n2 = 1;

    echo $n1 . "<br>";
    echo $n2 . "<br>";

    for ($i = 2; $i < 2048; $i++) {
        $next = $n1 + $n2;
        echo $next . "<br>";
        $n1 = $n2;
        $n2 = $next;
    }
    ?>
</body>

</html>
