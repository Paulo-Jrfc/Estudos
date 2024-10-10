<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary navbar-preta">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="./img/logo.png" alt="Logo" width="75px" height="75px" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler navbar-botao" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="direita navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link<?php if($nomeSite == 'SPF Fraudada!'){echo ' active" aria-current="page"';}
                        else{echo '"';}
                    ?> href="index.php">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if($nomeSite == 'Desenvolvedores'){echo ' active" aria-current="page"';}
                    else{echo '"';}
                    ?> href="desenvolvedores.php">Desenvolvedores</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
