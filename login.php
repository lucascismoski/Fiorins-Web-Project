<?php
	require "libs/conn.php";

	$email    = $_POST["email"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM xx_users WHERE email = '$email' AND password = '$password'";
	$res = mysqli_query($conn, $sql);
		
	$rows_count = mysqli_num_rows($res);
		
	if($rows_count > 0){	
		session_start();		
		
		$row = mysqli_fetch_assoc($res);		
		
		$_SESSION['user_id']       = $row['user_id'];
		$_SESSION['name']          = $row['name'];
        $_SESSION['email']         = $row['email'];
        $_SESSION['is_admin_flag'] = $row['is_admin_flag'];
		
		header("Location: inicio.php");
	}
	else{
		header("Location: index.php?erro=1");
	}
?>