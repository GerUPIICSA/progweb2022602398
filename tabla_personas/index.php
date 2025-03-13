<?php
    ini_set("display_errors", E_ALL);
    include_once "Persona.php";

    $lista = [
        new Persona("Fulano","1999-08-14","5512154680"),
        new Persona("Tilin","2005-04-02","5512927384"),
        new Persona("Elton","2003-02-06","5526301742"),
        new Persona("Brenda","1997-05-09","8463782930"),
        new Persona("Joel","2000-11-17","2395748392"),
        new Persona("Leonardo","2001-12-21","1204837283"),
        new Persona("Viera","1800-01-26","3409382639"),
        new Persona("Allan","2004-06-21","0483648192"),
        new Persona("Paloma","2002-09-22","5047283947"),
        new Persona("Fabiola","2006-04-16","5048273941")
    ];

?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Lista de personas</title>
        <style>
            td{
                background-color: cyan;
            }
        </style>
    </head>

    <body>
        <h1>Lista de personas</h1>
        <table border>
            
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Edad Actual</th>
                    <th>Telefono</th>
                </tr>
            </thead>

            <tbody>
                
                <?php foreach($lista as $p): ?>
                    <tr>

                        <td><?php echo $p ->getNombre()?></td>
                        <td><?php echo $p ->getFecNac()?></td>
                        <td><?php echo $p ->getEdad()?></td>
                        <td><?php echo $p ->getTel()?></td>

                    </tr>
                <?php endforeach?>

            </tbody>
        </table>
    </body>

</html> 