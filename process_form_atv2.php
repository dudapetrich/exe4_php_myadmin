<?php
//Conectar–se ao BD
$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_duda_prt_042_bd';
//Efetua a conexão com o BD
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die ('Error connecting to MySQL Server.');
//Obtém os valores do formulário
$testID = $_POST['testID'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
//Cria a Query SQL
$query = "INSERT INTO teste1 (nome, testID, idade) VALUES ('$nome', '$testID', '$idade')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');
//Fechar a conexão com o BD
mysqli_close($link);
?>