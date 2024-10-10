<?php


    $tituloH1 = 'Incluindo PHP no HTML';
    $texto = 'É possível fazer a inclusão de PHP em páginas html se estas estiverem dentro do php.';
    $titulo = 'Aula 2';

    require './conteudoTabela.php';

    //Página HTML dividida em pedaços
    require './inicio.html'; //inicio do body

    require './conteudo.html';

    require './tabela.html';

    require './fim.html';    //fim do body

?>

