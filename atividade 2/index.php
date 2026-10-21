<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loja PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f4f6fb; }
    .hero { background: linear-gradient(135deg, #4f46e5, #7c3aed); color: #fff; }
    .card-link { transition: transform .15s, box-shadow .15s; }
    .card-link:hover { transform: translateY(-4px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.12); }
  </style>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">Loja PHP</a>
      <a class="btn btn-outline-light btn-sm" href="carrinho.php">Carrinho</a>
    </div>
  </nav>

  <header class="hero py-5 mb-5">
    <div class="container text-center">
      <h1 class="display-5 fw-bold">Loja PHP</h1>
      <p class="lead mb-0">Bem-vindo! Escolha uma opção abaixo.</p>
    </div>
  </header>

  <main class="container">
    <div class="row g-4">
      <div class="col-sm-6 col-lg-3">
        <a href="login.php" class="card card-link h-100 text-decoration-none text-dark">
          <div class="card-body text-center">
            <h5 class="card-title">Entrar</h5>
            <p class="card-text text-muted">Acesse sua conta</p>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3">
        <a href="painel.php" class="card card-link h-100 text-decoration-none text-dark">
          <div class="card-body text-center">
            <h5 class="card-title">Painel</h5>
            <p class="card-text text-muted">Área do usuário</p>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3">
        <a href="carrinho.php" class="card card-link h-100 text-decoration-none text-dark">
          <div class="card-body text-center">
            <h5 class="card-title">Carrinho</h5>
            <p class="card-text text-muted">Veja seus itens</p>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3">
        <a href="produtos.php" class="card card-link h-100 text-decoration-none text-dark">
          <div class="card-body text-center">
            <h5 class="card-title">Produtos</h5>
            <p class="card-text text-muted">Confira o catálogo</p>
          </div>
        </a>
      </div>
    </div>
  </main>
</body>
</html>
