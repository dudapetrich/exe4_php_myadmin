<?php
//Conectar–se ao BD
$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_duda_prt_043_bd';
//Efetua a conexão com o BD
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die ('Error connecting to MySQL Server.');
//Obtém os valores do formulário
$fabricante = $_POST['fabricante'];
$ano_fabricacao = $_POST['ano_fabricacao'];
$quilometragem = $_POST['quilometragem'];
//Cria a Query SQL
$query = "INSERT INTO autos (fabricante, ano_fabricacao, quilometragem) VALUES ('$fabricante', '$ano_fabricacao', '$quilometragem')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');
//Fechar a conexão com o BD
mysqli_close($link);
?>