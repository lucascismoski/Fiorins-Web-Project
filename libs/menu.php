<nav>
	<ul id="menu">
	<?php
        $is_admin = $_SESSION['is_admin_flag'];
        
        if($is_admin  == "Y"){
            echo "<li><a href="."gerenciar_usuarios.php".">Cadastrar Usuário</a></li>";
            echo "<li><a href="."listar_usuarios.php".">Listar Usuários</a></li>";
        }   
    ?>	
        <li><a href="gerenciar_usuarios.php?user_id=<?php echo $_SESSION['user_id'];?>">Editar perfil</a></li>
        <!--<li><a href="cad_novo_item.php">Cadastrar Item</a></li>
        <li><a href="gerenciar_perfil.php">Gerenciar Perfil</a></li>
        <li><a href="cad_novo_emprestimo.php">Cadastrar Novo Empréstimo</a></li>-->
	</ul>
</nav>