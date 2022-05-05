<?php

$pdo = new PDO('mysql:host=localhost;dbname=peso;port=3306;charset=utf8', 'root', '');

$sql = "SELECT statusSensor, id, datahora FROM balanca_iot ORDER BY id DESC LIMIT 1";

$statement = $pdo->prepare($sql);

$statement->execute();

while($results = $statement->fetch(PDO::FETCH_ASSOC)) {
    $result[] = $results;
}
$organizado = array_reverse($result);

echo json_encode($organizado);




$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "peso";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
