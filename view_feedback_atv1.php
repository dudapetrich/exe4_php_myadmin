<!DOCTYPE html>

<html>
     <head>
<meta charset="utf-8" />

<title>Tabela</title>

</head> 

<body>

<h1>Tabela</h1>

<?php
//Database connection details to mySQL
$host = 'localhost';
$user = 'aluno';
$passw = 'aluno'; 
$dbname = 'atv_duda_prt_041_bd';

//Make a connection to the database
$conn = mysqli_connect($host, $user, $passw, $dbname) or die
("Unable to connect!");

//Create the SQL query
$query = "SELECT user_id, first_name, last_name, email, comments
FROM feedback ORDER BY feedback_date ASC";
$result = mysqli_query( $conn, $query ) or die ("Error in query");

//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; //add each row into the table array
}
?>

<table>
<tr>
<td><strong>Membro</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Email</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Escola</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Estado</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Função</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Nome da Equipe</strong></td>
</tr>
<?php
if ($table) { //Check if there are any rows to be displayed
//Retrieve each element of the array
foreach($table as $d_row) {
?>

<tr>
<td><?php echo($d_row["first_name"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["last_name"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["email"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["comments"]); ?></td>
</tr>

<?php
}
}
?>
</table>

<p>Número de Registros : <?php echo(mysqli_num_rows($result)); ?></p>

<?php
mysqli_close($conn);
?>
</body>
</html>