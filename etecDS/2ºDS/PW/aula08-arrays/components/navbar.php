<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="justify-content: space-between;">
  <a class="navbar-brand" href="http://localhost:8081/aula08-arrays/" style="margin-left: 5vw;"><img src="images/logo.png" alt="logo"></a>
  <a class="navbar-brand" href="http://localhost:8081/aula08-arrays/" style="margin-left: 1vw; color: white;">Bom Demais</a>
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
          href="http://localhost:8081/aula08-arrays/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($titulo == "Bom Demais - Produtos") {
          echo "active";
        } ?>"
          href="http://localhost:8081/aula08-arrays/produtos.php">Produtos</a>
      </li>
  </div>
</nav>