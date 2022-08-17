<?php
$numero = $_POST['numero_at'];
$telefone = $_POST['novo_tel'];
$ano = $_POST['novo_ano'];
$respFamiliar = $_POST['novo_resp'];
$municipio = $_POST['novo_muni'];
$unidade = $_POST['nova_unid'];
$data = $_POST['nova_data'];
$endereco = $_POST['novo_end'];

$host = "localhost";
$database = "projeto_integrador";
$username = "root";
$password = "";

$conexao = mysqli_connect($host, $username, $password, $database);

if(!$conexao){
    die('Conexão Falhou');
}

$sql = "UPDATE prontuario_familiar SET telefone = '$telefone', ano = '$ano', responsável = '$respFamiliar', municipio = '$municipio', unidade = '$unidade', data = '$data', endereco = '$endereco' WHERE numero = '$numero'";

if (mysqli_query($conexao,$sql)){
    echo "Atualizado!";
}

mysqli_close($conexao);

header ('Location: index.html')
?>