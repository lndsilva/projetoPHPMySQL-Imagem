<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "dbPessoa";

$conn = mysqli_connect($host,$username,$password) or die("Impossível conectar ao banco.");

mysqli_select_db($conn, $db) or die("Impossível conectar ao banco");

$result=mysqli_query($conn,"SELECT * FROM PESSOA") or die("Impossível executar a query");

while($row=mysqli_fetch_object($result)) {
	echo "<img src='getImagem.php?PicNum=$row->PES_ID' \">";
}

?>