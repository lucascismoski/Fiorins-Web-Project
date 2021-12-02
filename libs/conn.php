<?php
    $conn = mysqli_connect("localhost", "root", "", "xx_database");

    if($conn == false){
        die("Erro ao criar conexão com o banco de dados: " . mysqli_connect_error());
    }
?>