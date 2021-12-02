<?php
    require "libs/conn.php";
	include "libs/header.php";
?>
    <header>
        <h2>Usuários</h2>
    </header>


    <section>
        <?php 
        
            include "libs/menu.php";
        
        ?>

        <article>
            <table class="darkTable">
                <!--<caption>Usuários</caption>-->
                <thead>                    
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th> - </th>
                        <th> - </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT user_id
                                    ,name
                                    ,email
                                    ,cpf
                                    ,phone 
                                FROM xx_users
                                WHERE is_admin_flag != 'Y'";           

                        $res = mysqli_query($conn, $sql);
                        
                        
                        while($row = mysqli_fetch_assoc($res)){
                            echo "
                                <tr>
                                    <td>".$row['user_id']."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['cpf']."</td>
                                    <td>".$row['phone']."</td>
                                    <td><a href='gerenciar_usuarios.php?user_id=".$row['user_id']."'>Editar</a></td>
                                    <td><a href='deletar_usuario.php?user_id=".$row['user_id']."'>Excluir</a></td>
                                </tr>
                            ";
                        }
                    ?>
                </tbody>
                <!--<tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tfoot>-->
            </table>
        </article>
    </section>

<?php

	include "libs/footer.php";	

?>