<?php
session_start();
include_once '../thay.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>

    <!--GOOGLE CHARTS-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--CSS-->
    <link rel="stylesheet" href="paginaPrincipal.css">

</head>

<body>

    <nav>
        <div class="logo">
            <a href=""><img src="../../imagens/iconeGame.png" alt=""></a>
            <a href>Lojinha De Jogo</a>
        </div>
        <div class="logout">
            <p><a href="../sair.php">Sair da Sessão</a></p>
            <a href="../sair.php">
                <img src="../../imagens/logout.png">
            </a>
        </div>
    </nav>

    <div class="menu">
        <button class="menu ativo" id="btnRelatorios">Relatórios</button>
        <button class="menu" id="btnProdutos">Produtos</button>
    </div>

    <!--Grafico 1-->
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Vendas", {
                    role: "style"
                }],
                ["Maio", 16870, "color: #e5e4e2"],
                ["Agosto", 17807, "color: #e5e4e2"],
                ["Novembro", 15924, "color: #e5e4e2"],
                ["Setembro", 16574, "color: #e5e4e2"]
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                title: "Meses que mais venderam",
                width: 910,
                height: 385,
                borderradius: 5,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };


            var chart = new google.visualization.ColumnChart(document.getElementById("grafico1"));
            chart.draw(view, options);
        }
    </script>
    <!--Grafico 2-->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data2 = google.visualization.arrayToDataTable([
                ['Jogos', 'Quantidade'],
                ['Metal Gear Rising', 598],
                ['Boorderlands 2', 442],
                ['Terraria', 817],
                ['Subnautica', 625],
                ['Skyrim', 124]
            ]);

            var options2 = {
                title: 'Jogos vendidos Hoje',
                width: 910,
                height: 385,
            };

            var chart2 = new google.visualization.PieChart(document.getElementById('grafico2'));

            chart2.draw(data2, options2);
        }
    </script>
    <!--Grafico 3-->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['geochart'],
        });
        google.charts.setOnLoadCallback(drawRegionsMap);

        function drawRegionsMap() {
            var data3 = google.visualization.arrayToDataTable([
                ['Country', 'Vendas'],
                ['Germany', 27145	],
                ['United States', 184226],
                ['Brazil', 113659	],
                ['Canada', 57182	],
                ['France', 198937],
                ['RU', 84610	],
                ['Algeria', 17000	],
                ['Angola', 2603	],
                ['Benin', 171423	],
                ['Botswana', 39127	],
                ['Burkina Faso', 110582	],
                ['Burundi', 2468],
                ['Cameroon', 83026	],
                ['Canary Islands', 39012	],
                ['Cape Verde', 62918	],
                ['Central African Republic', 74399	],
                ['Ceuta', 114569	],
                ['Chad', 92860	],
                ['Comoros', 1248],
                ['Cote dIvoire', 52210	],
                ['Democratic Republic of the Congo', 69668	],
                ['Djibouti', 33472	],
                ['Egypt', 105737	],
                ['Equatorial Guinea', 44612	],
                ['Eritrea', 33202	],
                ['Ethiopia', 45077	],
                ['Gabon', 175792	],
                ['Gambia', 80453	],
                ['Ghana', 124016	],
                ['Guinea', 192708	],
                ['Lesotho', 171713	],
                ['Liberia', 169218	],
                ['Libya', 95027	],
                ['Madagascar', 100795	],
                ['Madeira', 173891	],
                ['Malawi', 29376	],
                ['Mali', 54882],
                ['Mauritania', 173508	],
                ['Mauritius', 67457	],
                ['Mayotte', 173508	],
                ['Melilla', 351],
                ['Morocco', 173508	],
                ['Mozambique', 2534],
                ['Namibia', 2422],
                ['Niger', 171312	],
                ['Nigeria', 824],
                ['Republic of the Congo', 171312	],
                ['Réunion', 2231],
                ['Rwanda', 173508	],
                ['Saint Helena', 171312	],
                ['São Tomé and Principe', 42765	],
                ['Senegal', 42765	],
                ['Seychelles', 173508	],
                ['Sierra Leone', 171312	],
                ['Somalia', 2471],
                ['Sudan', 1565],
                ['South Africa', 173508	],
                ['South Sudan', 173508	],
                ['Swaziland', 2456],
                ['Tanzania', 42765	],
                ['Togo', 5546],
                ['Tunisia', 34564],
                ['Uganda', 171312	],
                ['Western Sahara', 173508	],
                ['Zambia', 1551],
                ['France',  6570],
                ['Germany', 81890],
                ['Poland',  38540],
                ['Zimbabwe', 5818],
                ['Australia', 60025]
            ]);

            var options3 = {
                width: 910,
                height: 385,
            };

            var chart3 = new google.visualization.GeoChart(document.getElementById('grafico3'));

            chart3.draw(data3, options3);
        }
    </script>
    <!--Grafico 4-->
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data4 = google.visualization.arrayToDataTable([
                ["Jogo", "Quantidade", {
                    role: "style"
                }],
                ["Skyrim", 87054, "#b87333"],
                ["Dark Deception", 81000, "silver"],
                ["Boorderlands 2", 78020, "gold"],
                ["Monster Hunter: World", 112578, "color: #e5e4e2"],
                ["SkullGirls", 96781, "color: #eaaaa2"]
            ]);

            var view4 = new google.visualization.DataView(data4);
            view4.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options4 = {
                title: "Jogos mais vendidos do ano",
                width: 910,
                height: 385,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart4 = new google.visualization.BarChart(document.getElementById("grafico4"));
            chart4.draw(view4, options4);
        }
    </script>




    <div class="relatorios">

        <div class="linha1">
            <div id="grafico1">

            </div>
            <div id="grafico2">

            </div>
        </div>
        <div class="linha2">
            <div id="grafico3">

            </div>
            <div id="grafico4">

            </div>
        </div>

    </div>

    <div class="produtos">
        <h1>Cadastre seus novos Produtos</h1>

        <form>
            <div class="alinha">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo">
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco">
                <label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" id="quantidade">
                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" id="imagem">
                <button id="botaoImagem">Upload</button>
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="2" rows="7"></textarea>

                <div class="botoes">
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Apagar">
                </div>
            </div>
        </form>

    </div>

        <script src="imagem.js"></script>

        <script>
            $(document).ready(function(){

                $('.produtos').hide('fast');

            $('.menu').click(function(){
                $(this).toggleClass('ativo');
                $(this).siblings().removeClass('ativo');

                if($('#btnProdutos').hasClass('ativo')){
                    $('.relatorios').hide("slow");
                    $('.produtos').show("slow");
                }else{
                    $('.produtos').hide("slow");
                    $('.relatorios').show("slow");
                }
                
            });
        });
        </script>


</body>

</html>