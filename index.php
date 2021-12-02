<!DOCTYPE html>
<html>
	<head>
		<title>Fiorin's Project</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
        <header>
            <h2>Fiorin's Project - Login</h2>
        </header>   
        <div>            
			<p style="text-align:center">Bem-vindo ao Fiorin's Project</p>
            <p style="text-align:center">Faça login: admin@dummy.com.br:admin</p>
            
            <?php           
                if(isset($_GET['erro'])){
                    echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
                }
                
                if(isset($_GET['autentica'])){
                    echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
                }            
            ?>  

            <form action="login.php" method="post">              
                <input type="email"    name="email"    placeholder="Digite seu email @dummy.com.br" pattern=".+@dummy\.com.br" size="30" required><br>
                <input type="password" name="password" placeholder="Senha" required><br>
                <input type="submit"   value="Login">
            </form>
        </div>
        <footer>
            <p>O nosso lema é Ousadia e Alegria.</p>
        </footer>
    </body>
</html>