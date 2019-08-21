<?php
//Obtém os valores do formulário
$nome = $_POST['Nome'];
$email = $_POST['Email'];
$escola= $_POST['Escola'];
$estado= $_POST['Estado'];
$funcao = $_POST['Funcao'];
$nome_equipe = $_POST['Nome_equipe'];

//Conecta com o BD
$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_duda_prt_041_bd';

    //Efetua a conexão com BD
    $link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die ('Error connecting to MySQL Server.');

    //Cria a Query SQL
    $query = "INSERT INTO Membros (Nome, Email, Escola, Estado, Funcao, Nome_equipe) VALUES ($nome, $email, $escola, $estado, $funcao, $nome_equipe )";
    $result = mysqli_query( $link, $query ) or die('Error querying database.');

    //Fecha a conexão
    $mysqli_close($link);
?>
    
    