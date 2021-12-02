<?php 
    require "libs/conn.php";
    include "libs/header.php"; 

    $user_id  = "";
	$email    = "";
	$name     = "";
	$cpf      = "";
    $phone    = "";
    $password = "";
  
	if(isset($_GET['user_id'])){	
		$user_id = $_GET['user_id'];
		
		$sql = "SELECT * FROM xx_users WHERE user_id = $user_id";		
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);		
	
        $email    = $row['email'];
        $name     = $row['name'];
        $cpf      = $row['cpf'];
        $phone    = $row['phone'];
        $password = $row['password'];		
	}
?>
    <header>
        <h2>Cadastro de Usuário</h2>
    </header>

    <section>
        <?php 		  
            include "libs/menu.php";
        ?>
        <article>
            <form action="cadastrar_usuario.php" method="post">      
                <input type="hidden"    name="user_id"  value="<?php echo $user_id;  ?>"/>        
                <input type="text"      name="name"     value="<?php echo $name;     ?>"   placeholder="Nome" size="50" required><br>    
                <input type="password"  name="password" value="<?php echo $password; ?>"   placeholder="Senha" size="20" required><br>  
                <input type="email"     name="email"    value="<?php echo $email;    ?>"   placeholder="Digite seu email @dummy.com.br" pattern=".+@dummy\.com.br" size="30" required><br>  
                <input type="text"      name="cpf"      value="<?php echo $cpf;      ?>"   placeholder="CPF"><br>           
                <input type="text"      name="phone"    value="<?php echo $phone;    ?>"   placeholder="Telefone"><br>

                <input type="submit" value="Cadastrar Usuário">
            </form>
        </article>
    </section>
       
<?php 
    include "libs/footer.php"; 
?>