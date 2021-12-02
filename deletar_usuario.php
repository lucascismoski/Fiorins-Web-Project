<?php

	require "libs/conn.php";
	
	$user_id = $_GET['user_id'];
	
	$sql = "DELETE FROM xx_users WHERE user_id = $user_id";
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: listar_usuarios.php");