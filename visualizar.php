</<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <h1> Dados cadastrados</h1>
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "projeto_integrador";

$conexao = mysqli_connect($host, $username, $password, $database);

if (!$conexao){
    die("conexão falhou");
}

$sql = 'SELECT * FROM prontuario_familiar';

#armazena os dados 
$resultado = mysqli_query($conexao, $sql);

#serve para saber o numero de linhas do retorno da 9informação
$nLinhas = mysqli_num_rows($resultado);

    for ($i = 0; $i < $nLinhas; $i++){
        $linha = mysqli_fetch_row($resultado);

        echo "Número de prontuário: ".$linha[0]."<br> Telefone: ".$linha[1]."<br>Ano: ".$linha[2]."<br>Responsável Familiar: ".$linha[3]."<br>Município: ".$linha[4]."<br>Unidade: ".$linha[5]."<br>Data: ".$linha[6]."<br>Endereço: ".$linha[7]."<hr>";
    }

?>

<a href='index.html'>Voltar para parte inicial</a>

</body>
</html>