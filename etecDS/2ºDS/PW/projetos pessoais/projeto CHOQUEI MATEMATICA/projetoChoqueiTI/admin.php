<?php


##Estruturação do site
$nomeSite = "ADMIN";
require("./content/inicio.php");
require("./content/navbar.php");
?>

<html>
    <style>
        .admin{
            height: 75vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            align-content: center;
            text-align: center;
        }

        .texto{
            font-size: 1.5rem;
            margin: 1.2rem;
            text-align: center
        }

        strong{
            font-size: 1.8rem;
            color: red;
        }

    </style>
    <main class="admin">
        
        <?php
        include ("./class/ClassVisitas.php");
        $conexao = new ClassVisitas();  
        try{
            $conexao = $conexao->Conectar();
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT COUNT(idVisita) as Total FROM tbvisita";
            $stmt = $conexao->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            echo '<p class="texto"> Total de visitantes no site: <strong>' . $result['Total'] . '</strong> pessoas.</p>';
        } catch (PDOException $e){
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        }
        $conexao = null;
        ?>
    </main>
</html>

<?php
require("./content/footer.php");
require("./content/fim.php"); 
?>