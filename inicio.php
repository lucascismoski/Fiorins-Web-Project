<?php 
    include "libs/header.php"; 
?>
    <header>
        <h2>Fiorin's Project - Painel Inicial</h2>
    </header>

    <section>
        <?php 		  
            include "libs/menu.php";
        ?>
        
        <article>
            Bem-vindo <?php echo $_SESSION['name']; ?>!<br/><br/><br/><br/>            
        </article>
    </section>
<?php
	include "libs/footer.php";	
?>