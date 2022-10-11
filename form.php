<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>

<?php

    $pi = 3.1416;
    $raio = ($_POST['raio']) ;
    $area = ($pi * ($raio * $raio));
    $circ = (2* ($raio*$raio));

    echo " <h1> A área do cículo é : " . $area . "</h1>";
    echo " <h1> A circunfênria é : " . $circ. "</h1>"; 
    echo "---------------------------------------- ";
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $media = ($nota1 + $nota2 + $nota3)/3;


    if ($media >= 6 ) {
        echo "<h2> Sua nota foi : </h2> <h3>". $media . "</h3>"; 
        echo "<h3> Você foi aprovado </h3> ";
    }
        elseif ($media < 6 && $media >= 5) {
            echo "<h2> Sua nota foi : </h2> <h4>". $media . "</h4>";
            echo "<h4> Você está de recuperação </h4>";
        }
            else {
                echo "<h2> Sua nota foi : </h2> <h5>". $media . "</h5>";
                echo "<h5> Você está reprovado </h5>";
            }

    ?>

</body>
</html>