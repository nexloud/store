<?php

if(isset($_POST["user"])) {
	$result = mysql_query("SELECT * FROM usuarios WHERE usuario='".limpiartexto($_POST["user"])."' LIMIT 1;");
	$row = mysql_fetch_array($result);
		if(md5($_POST["pass"])==$row['password']) {
			session_start();
			$_SESSION['pase']=md5($_POST["usuario"]);
			$_SESSION['nombre']=ucwords($row['nombre']);
			header("Location: ./");
			
		} else{
			header("Location: ./");
		}
} else{
	header("Location: ./");
}
?>