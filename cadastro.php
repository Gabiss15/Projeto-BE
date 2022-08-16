<?php
    $numero = $_POST['numero'];
    $telefone = $_POST['telefone'];
    $ano = $_POST['ano'];
    $respFamiliar = $_POST['respFamiliar'];
    $municipio = $_POST['municipio'];
    $unidade = $_POST['unidade'];
    $data = $_POST['data'];
    $endereco = $_POST['endereco'];

    echo 'Numero de prontuario'.$numero.'</br>';
    echo 'Telefone:'.$telefone.'</br>';
    echo 'Ano:'.$ano.'</br>';
    echo 'Resposavel Familiar'.$respFamiliar.'</br>';
    echo 'Municipio'.$municipio.'</br>';
    echo 'Unidade'.$unidade.'</br>';
    echo 'Data'.$data.'</br>';
    echo 'Endereco'.$endereco.'</br>';

    $host = "localhost";
    $database = "projeto_integrador";
    #Tabela do cartAo vacinal
    $username = "root";
    $password = "";

    #para estabelecer conexao com banco de dados
    $conexao = mysqli_connect($host, $username, $password, $database);
    if(!$conexao){
        die("Conexão Falhou");
    }
    #Criar a consulta sql de insercao de dados
    $sql = "INSERT INTO prontuario_familiar VALUES ('$numero', '$telefone', '$ano', '$respFamiliar', '$municipio', '$unidade', '$endereco', '$data')";
    if(mysqli_query($conexao,  $sql)){
        echo "Inserido !";
    }
    #Encerrar a conexao com o BD
    mysqli_close($conexao);

    header('Location:index.html');
?>