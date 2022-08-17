<?php
$numero= $_POST['n_prontuario'];


$host = "localhost";
$database = "projeto_integrador";
$username = "root";
$password = "";


$conexao = mysqli_connect($host,$username,$password,$database);

if (!$conexao){
    die("Conexão Falhou!");
}

$sql = "DELETE FROM prontuario_familiar WHERE numero = $numero";

if(mysqli_query($conexao,$sql)){
echo "Removido!";
}

mysqli_close($conexao);
header('Location:index.html');
?>