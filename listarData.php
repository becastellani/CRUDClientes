<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
 <title>Listagem de Clientes</title>
</head>
<body>
<a href="index.php" class="w3-display-topleft">
 <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-
xxlarge"></i>
</a>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbentrevista"; 
$conexao = new mysqli($servername, $username, $password,$dbname);
if($conexao->connect_error){
    die("Connection failed: ").$conexao->connect_error;
}
//recebe os dados
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
?>
<form method="POST" action="">

<label>Data de inicio</label>
<input type="date" name="data_inicio" value=""><br><br>

<label>Data final</label>
<input type="date" name="data_final" value=""><br><br>

<input type="submit" value="Pesquisar" name="PesqEntreData"><br><br>

</form>


<?php
//verifica o submit
    if(!empty($dados['PesqEntreData'])){
        var_dump($dados);
    }

?>
</body>
</html>