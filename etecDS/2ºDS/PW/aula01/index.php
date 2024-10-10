<?php
    //Declarar uma variável
    //A natureza das variáveis são definidas dinamicamentes
    /*
        String
        boolean
        integer
        double
        char
        long
        float
        byte

    */
    $name = 'Guilherme Pedrosa da Silva cria';
    $name2 = 'José Pedroso do Santos Silveiro';
    $age = 36   ;

    echo 'Nome do primeiro aluno: ' . $name . '<br>';
    echo 'Idade do primeiro aluno: ' . $age;
    
    //Mesma coisa do echo, mas ele tem algumas coisas por de baixo do pano, como devolver um boolean
    print("<br> Idade em print com aspas duplas: $age");

    echo '<br>';

    //Aspas simples, ele interpreta com tudo texto
    //Aspas duplas, ele entende que precisa interpretar algo, como uma variável, MAS GASTA PROCESSAMENTO 


    /*   
    * Criar uma tabela com 5 registros
    * que devem conter os seguintes campos: 
    * nomeProduto
    * precoProduto
    * descricaoProduto
    * validadeProduto
    */
    
    echo '
    <style>
        .bomba{
            border-box: box;
            font-size: 1.3rem;
            border-radius: 6px; 
            border: 1px solid black;
        }

        .quadrado {
            padding: 10px;
            border-radius: 5px;
        }

        .vermelho {
            color: red;
        }

        .verde { color: green; }

        .tabela{
            background: linear-gradient(58deg, rgba(75,70,70,1) 0%, rgba(125,125,125,1) 50%, rgba(207,207,207,1) 100%);
            border-radius: 5px;
            border: 3px solid black;
            text-align: center;
        }

        .tabela td{
            color:#fff;
            padding: 5px;            
            border-radius: 5px;
            border:3px solid black;            
            height:60px;
            font-size:19px;
        }

        .tabela th{ 
            color:#fff;
            padding: 5px;            
            border-radius: 0px;
            font-size: 1.4rem;
            border-radius: 5px;
            border:3px solid black;
            border-top: 0px;
            border-bottom:0px;
        }

        
    </style>
    ';


    $table = '<table class="bomba" align="center" bgcolor="black">';
    $closeTable = '</table>';

    function thContent ($content){
        $th = '<th bgcolor="#e8eaeb" class="quadrado">';
        $closeTh = '</th>';
        echo $th . $content . $closeTh;
    }

    function tdContent ($content){
        $td = '<td align="center" class="quadrado" bgcolor="white">';
        $closeTd = '</td>';
        echo $td . $content . $closeTd;
    }

    function tdContentNotExpired($content){
        $td = '<td align="center" class="quadrado verde" bgcolor="white">';
        $closeTd = '</td>';
        echo $td . $content . $closeTd;
    }

    function createHeader($category1, $category2, $category3, $category4){
        $tr = '<tr>';
        $closeTr = '</tr>';
        echo $tr;
        thContent($category1);
        thContent($category2);
        thContent($category3);
        thContent($category4);
        echo $closeTr;
    }

    function createProduct ($nameProduct, $priceProduct, $descriptionProduct, $expirationDateProduct){
        $tr = '<tr>';
        $closeTr = '</tr>';
        echo $tr;
        tdContent($nameProduct);
        tdContent($priceProduct);
        tdContent($descriptionProduct);
        tdContentNotExpired($expirationDateProduct);
        echo $closeTr;
    }

    echo '<h1 align="center"> Jeito do José! </h1>';

    echo $table;

    //Cabeçalho
    createHeader('Nome do Produto', 'Preço do produto', 'Descrição do produto', 'Data de Validade');

    //Produto 1
    createProduct('Sabão em pó Omo 1kg', 'R$35,90', '1kg sabão em pó', '15/08/2023');
    //Fim produto 1

    //Produto 2
    createProduct('Amaciante Downy Lavanda 1L', 'R$29,90', 'Amaciante sabor lavanda 1L', '19/12/2023');
    //Fim produto 2

    //Produto 3
    createProduct('Achocolatado em pó Nescau 500g', 'R$15,89', 'Achocolatado em lata Nescau 500g', '13/03/2023');
    //Fim produto 3

    //Produto 4
    createProduct('Canela em casca 50g', 'R$6,80', 'Canela em casca 50g', '19/08/2023');
    //Fim produto 4
    echo $closeTable;

    echo '<br>';

    echo '<h1 align="center">Jeito do Guilherme Pedro!</h1><br>';


    //incio da tabela com estilo
    $tabela = '<table border="1px solid" align="center" class="tabela">';
    $tabela .= '<tr class="tr">';
    //table head - cabeçarios da tabela
    $tabela .= '<th> Nome do Produto</th>';
    $tabela .= '<th> Preço do produto</th>';
    $tabela .= '<th> Descrição do produto</th>';
    $tabela .= '<th> Data de Validade</th>';
    $tabela .= '</tr>';


    //adicionado dados na tabela ultilizando "table data"
    //iniciando o row
    $tabela .= '<tr>';
    $tabela .= '<td class="td">Arroz camil</td>';
    $tabela .= '<td>R$: 23,00</td>';
    $tabela .= '<td>Arroz branco tipo 1 </td>';
    $tabela .= '<td>15/08/24</td>';
    $tabela .= '</tr>';    
    //fim do row

    //adicionado dados na tabela ultilizando "table data"
    //iniciando o row
    $tabela .= '<tr>';
    $tabela .= '<td>Feijão camil</td>';
    $tabela .= '<td>R$: 14,53</td>';
    $tabela .= '<td>Feijão carioca 1kg </td>';
    $tabela .= '<td>09/02/22</td>';
    $tabela .= '</tr>';    
    //fim do row

    //adicionado dados na tabela ultilizando "table data"
    //iniciando o row
    $tabela .= '<tr>';
    $tabela .= '<td>Macarrão Spaghetti</td>';
    $tabela .= '<td>R$ 18,88</td>';
    $tabela .= '<td>Macarrão Spaghetti Premium Sem Glúten Casarão 300g </td>';
    $tabela .= '<td>27/02/23</td>';
    $tabela .= '</tr>';    
    //fim do row



    //adicionado dados na tabela ultilizando "table data"
    //iniciando o row
    $tabela .= '<tr>';
    $tabela .= '<td>Refrigerante Coca-Cola</td>';
    $tabela .= '<td>R$: 10,29</td>';
    $tabela .= '<td>Refrigerante Coca-Cola Original Garrafa 2L - Coca Cola </td>';
    $tabela .= '<td>07/07/25</td>';
    $tabela .= '</tr>';    
    //fim do row

    //adicionado dados na tabela ultilizando "table data"
    //iniciando o row
    $tabela .= '<tr>';
    $tabela .= '<td>Vinho Tinto Seco</td>';
    $tabela .= '<td>R$: 36,25</td>';
    $tabela .= '<td>Vinho Tinto Seco Concha y Toro Sunrise - Carmenere Chile 750ml</td>';
    $tabela .= '<td>20/07/94</td>';
    $tabela .= '</tr>';    
    //fim do row

    echo $tabela;
    
?>