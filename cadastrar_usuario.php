<?php
    require "libs/conn.php";

    $user_id  = $_POST['user_id'];
    $email    = $_POST['email'];
    $name     = $_POST['name'];
    $cpf      = $_POST['cpf'];
    $phone    = $_POST['phone'];
    $password = $_POST['password'];	

    if(empty($user_id)){
        $sql = "INSERT INTO xx_users (
                      name
                    , password
                    , email
                    , cpf
                    , phone
                ) VALUES (
                      '$_POST[name]'
                    , '$_POST[password]'
                    , '$_POST[email]'
                    , '$_POST[cpf]'
                    , '$_POST[phone]'
                )";

        $res = mysqli_query($conn, $sql);

        if($res){
            header("Location: listar_usuarios.php");    
        }else{
            echo "ERRO AO INSERIR!";
        }
    } else {
        $sql = "UPDATE xx_users SET
					  name     = '$name'
				    , email    = '$email'
					, password = '$password'
                    , cpf      = '$cpf'
                    , phone    = '$phone'
				WHERE
					user_id = $user_id";
					
		
		$res = mysqli_query($conn, $sql);		
	
		if($res){			
			header("Location: listar_usuarios.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
    }    
?>