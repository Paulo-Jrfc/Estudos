<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Lojinha de Jogo</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!--BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">

    <!--FAVICON-->
    <link rel="shortcut icon" href="./imagens/favicon.ico" image/x-icon">

    <!--AWESOME ICONS-->
    <script src="https://kit.fontawesome.com/88b536a571.js" crossorigin="anonymous"></script>

</head>

<body>

    <nav>

        <input type="checkbox" id="check">

        <div class="logoPequeno">
            <div class="logo">

                <img src="./imagens/iconeGame.png" alt="">

                <a href>Lojinha De Jogo</a>
            </div>

            <label for="check">
                <i class="bi bi-list"></i>
            </label>
        </div>
        <div class="menu">
            <ul>
                <li id="item-lista">
                    <form action="cookie.php" method="post"><input type="submit" value="Tudo" name="btn"></form>
                </li>
                <li id="item-lista">
                    <form action="cookie.php" method="post"><input type="submit" value="Ação" name="btn"></form>
                </li>
                <li id="item-lista">
                    <form action="cookie.php" method="post"><input type="submit" value="Terror" name="btn"></form>
                </li>
                <li id="item-lista">
                    <form action="cookie.php" method="post"><input type="submit" value="Sobrevivencia" name="btn">
                    </form>
                </li>
                <li id="item-lista">
                    <form action="cookie.php" method="post"><input type="submit" value="RPG" name="btn"></form>
                </li>
                <li id="item-lista">
                    <form action="cookie.php" method="post"><input type="submit" value="Luta" name="btn"></form>
                </li>
            </ul>
        </div>

        <div class="logoGrande">

            <div class="logo">

                <img src="./imagens/iconeGame.png" alt="">

                <a href>Lojinha De Jogo</a>

            </div>

            <div class="categorias">
                <ul id="lista">
                    <li id="item-lista">
                        <form action="cookie.php" method="post"><input type="submit" value="Tudo" name="btn"></form>
                    </li>
                    <li id="item-lista">
                        <form action="cookie.php" method="post"><input type="submit" value="Ação" name="btn"></form>
                    </li>
                    <li id="item-lista">
                        <form action="cookie.php" method="post"><input type="submit" value="Terror" name="btn"></form>
                    </li>
                    <li id="item-lista">
                        <form action="cookie.php" method="post"><input type="submit" value="Sobrevivencia" name="btn">
                        </form>
                    </li>
                    <li id="item-lista">
                        <form action="cookie.php" method="post"><input type="submit" value="RPG" name="btn"></form>
                    </li>
                    <li id="item-lista">
                        <form action="cookie.php" method="post"><input type="submit" value="Luta" name="btn"></form>
                    </li>
                </ul>
            </div>

            <div class="login">
                <p><a href="./login/login.php" id="EntreNaSuaConta">Entre na sua Conta</a></p>
                <a href="./login/login.php"><img src="./imagens/login.ico" alt=""></a>
            </div>
        </div>

    </nav>

    <div class="carrousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./imagens/imagensCarrosel/borderlands2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/imagensCarrosel/brawlhallq.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/imagensCarrosel/doom.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/imagensCarrosel/heavyMetalMachines.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/imagensCarrosel/MetalGearRising.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/imagensCarrosel/metro.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/imagensCarrosel/MortalCombat.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/imagensCarrosel/skullgirls.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./imagens/imagensCarrosel/StreetFigter.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--Carrosel 2-->
    <div id="carrosel2">
        <div id="carouselIcones" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="item">
                        <img src="./imagens/iconeCaminhao.png">
                        <div class="text">
                            <span class="text1">Envio Rapido</span>
                            <span class="text2">Entregamos em ate 24 horas</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">

                    <div class="item">
                        <img src="./imagens/iconeCartao.pnj.png">
                        <div class="text">
                            <span class="text1">Pagamento Facilitado</span>
                            <span class="text2">Em até 6x no Cartão de Crédito</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">

                    <div class="item">
                        <img src="./imagens/iconeSeguro.png">
                        <div class="text">
                            <span class="text1">Site seguro</span>
                            <span class="text2">Compre com segurança</span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="item">
                        <img src="./imagens/iconeSuporte.png">
                        <div class="text">
                            <span class="text1">Atendimento</span>
                            <span class="text2">Suporte especializado 24hrs</span>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIcones" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIcones" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <div class="tituloJogos">
        <span>
            <?php
      if (isset($_COOKIE['categoriaAção'])) {
        echo 'Jogos de ação';
      } else if (isset($_COOKIE['categoriaTerror'])) {
        echo 'Jogos de Terror';
      } else if (isset($_COOKIE['categoriaSobrevivencia'])) {
        echo 'jogos de sobrevivencia';
      } else if (isset($_COOKIE['categoriaRPG'])) {
        echo 'jogos de rpg';
      } else if (isset($_COOKIE['categoriaLuta'])) {
        echo 'jogos de luta';
      } else {
        echo 'jogos em geral';
      }
      ?>
        </span>
    </div>

    <main id="jogos">
        <?php

    require_once './metodos.php';

    if (isset($_COOKIE['categoriaAção'])) {
      acao();
      desceTela();
    } else if (isset($_COOKIE['categoriaTerror'])) {
      terror();
      desceTela();
    } else if (isset($_COOKIE['categoriaSobrevivencia'])) {
      sobrevivencia();
      desceTela();
    } else if (isset($_COOKIE['categoriaRPG'])) {
      RPG();
      desceTela();
    } else if (isset($_COOKIE['categoriaLuta'])) {
      luta();
      desceTela();
    } else {
      Tudo();
    }
    ?>
    </main>


    <div class="novidades">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="text">
                    <span class="text1">Cadastre-se para receber</span>
                    <span class="text2">Ofertas recomendadas e preços exclusivos</span>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <form>
                    <input type="email" name="email" placeholder="Seu E-mail" id="email" required autocomplete="off">
                    <input type="submit" value="Enviar" style="border-radius:0 5px 5px 0;line-height:40px;background-color:orangered;
">
                </form>
            </div>
        </div>
    </div>

    <footer>

        <div class="info">
            <p id="Marca">Lojinha De Jogo</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem ullam placeat expedita hic sapien
            </p>

        </div>

        <div class="copy">
            <p>

                Copright &copy; 2022 Lojinha De Jogo. Design by <span>WIliam</span>
            </p>
        </div>

    </footer>

</body>

</html>