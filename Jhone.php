<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>....</title>
    
</head>
<body>

   
    <?php


    // $raio = $_POST['raio'];
    // $circ = $_POST['circ'];
    // $area=  $_POST[(3,14) *($raio* $raio)];
	// $circ = 2 (* $raio * $raio);

    // echo" <h1> A área do círculo é : </h1> " $area ;

    $raio = ($_POST['raio']) 
    ? 1
    : $_POST['raio'];

    $area = 4 * pi() * ($raio * $raio);
    $circ = 4/3 * pi() * ($raio * $raio * $raio);

    echo " <h1> Resultado da área do cículo : ". $area. " </h1>";
    echo " <h1> O valor da cincunfeência é : "  .$circ . "</h1>";

    // echo " <h1 >Resultado da &Aacuterea:".number_format($area,2,',','.')."<br>";
    // echo "Resultado do volume:".number_format($volume,2,',','.');










        // $nome = $_POST['name'];
        // $email = $_POST['email'];
        // $password = $_POST['password'];
       
        // echo "<h1> Seu nome é : " .$nome . "</h1>";
        // echo "<h1> Seu email é : " .$email . "</h1>";
        // echo "<h1> Sua senha é : " .$password . "</h1>";
        
        
        
    


        // $capitais['AM'] = 'Manaus';
        // $capitais['SP'] = 'São paulo';
        // $capitais['RR'] = 'Boa Vista';
        // $capitais['AC'] = 'Rio Branco';
        // $capitais['RO'] = 'Porto Velho';
        // $capitais['RN'] = 'Natal';
        // $capitais['RO'] = 'Porto Velho';
        
    
        // echo "<table border='1' width=400  height= 250 text-align: center;>";
        // echo "<tr> <td> Estado </td> <td> Capital </td> </tr>";

        // foreach ($capitais as $key => $value) {
        //     echo " <tr><td> " .$key. " </td><td> " .$value. "</td> </tr>";
        // }

        // echo "</table>";
    ?>

</body>
</html>