<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "dbPessoa";
	$PicNum = $_GET["PicNum"];

	$conn = mysqli_connect($host,$username,$password) or die("Impossível conectar ao banco.");
	mysqli_select_db($conn,$db) or die("Impossível conectar ao banco.");
	$result=mysqli_query($conn,"SELECT * FROM PESSOA WHERE PES_ID=$PicNum") or die("Impossível executar a query ");
	$row=mysqli_fetch_object($result);
	Header( "Content-type: image/gif");
	echo $row->PES_IMG;
?>