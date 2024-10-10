<?php
    require "conexao.php";
    $query = "SELECT * FROM vw_produtos";
    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
?>