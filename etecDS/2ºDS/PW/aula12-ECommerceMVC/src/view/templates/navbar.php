<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="justify-content: space-between;">
  <a class="navbar-brand" href="/" style="margin-left: 5vw;"><img src="public/assets/images/logo.png" alt="logo"></a>
  <a class="navbar-brand" href="/" style="margin-left: 1vw; color: white;">Bom Demais</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: flex-end; margin-right: 5vw;">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link <?php if ($titulo == "Bom Demais - Home") {
          echo "active";
        } ?>"
          href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($titulo == "Bom Demais - Produtos") {
          echo "active";
        } ?>"
          href="/produtos">Produtos</a>
      </li>
      <?php
        if (session_status() == PHP_SESSION_NONE) {session_start();}
        if(!isset($_SESSION['token'])){
          if($titulo == "Bom Demais - Login") {
            echo '<li class="nav-item">
                    <a href="/login" class="nav-link active">Login</a>
                  </li>';
          }else{
            echo '<li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                  </li>';
          }
        }else{
          echo '<li class="nav-item">
                  <a href="/encerrar" class="nav-link">Encerrar</a>
                </li>';
        }
        session_write_close();
      ?>
      <li>
        <a class="nav-link <?php if($titulo == "Bom Demais - Carrinho"){echo "active";}?>" href="/carrinho">Carrinho</a>
      </li>
    </ul>
  </div>
</nav>