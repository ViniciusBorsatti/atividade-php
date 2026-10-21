<?php
$atividades = [
    [
        'titulo' => 'Atividade 1',
        'descricao' => 'Tabuada e média do aluno com formulário POST e estruturas de repetição.',
        'link' => 'atividade 1/index.html',
        'tags' => ['POST', 'for', 'if/else'],
    ],
    [
        'titulo' => 'Atividade 2',
        'descricao' => 'Loja com classes, sessão, login, painel, carrinho e produtos no banco de dados.',
        'link' => 'atividade 2/index.php',
        'tags' => ['Classes', 'Sessão', 'MySQL'],
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atividades PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f4f6fb; }
    .hero { background: linear-gradient(135deg, #4f46e5, #7c3aed); color: #fff; }
    .card-link { transition: transform .15s, box-shadow .15s; }
    .card-link:hover { transform: translateY(-4px); box-shadow: 0 .5rem 1rem rgba(0,0,0,.12); }
    .numero { width: 48px; height: 48px; border-radius: 12px; background: #ede9fe; color: #5b21b6; }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">Atividades PHP</a>
      <a class="btn btn-outline-light btn-sm" href="https://github.com/ViniciusBorsatti/atividade-php">GitHub</a>
    </div>
  </nav>

  <header class="hero py-5 mb-5">
    <div class="container text-center">
      <h1 class="display-5 fw-bold">Atividades PHP</h1>
      <p class="lead mb-0">Vinicius Borsatti · Ciência da Computação · IFC Concórdia</p>
    </div>
  </header>

  <main class="container flex-grow-1">
    <div class="row g-4">
      <?php foreach ($atividades as $i => $atividade): ?>
        <div class="col-md-6">
          <a href="<?= htmlspecialchars(str_replace(' ', '%20', $atividade['link'])) ?>" class="card card-link h-100 text-decoration-none text-dark border-0">
            <div class="card-body p-4">
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="numero d-flex align-items-center justify-content-center fw-bold fs-5"><?= $i + 1 ?></div>
                <h5 class="card-title mb-0"><?= htmlspecialchars($atividade['titulo']) ?></h5>
              </div>
              <p class="card-text text-muted"><?= htmlspecialchars($atividade['descricao']) ?></p>
              <?php foreach ($atividade['tags'] as $tag): ?>
                <span class="badge rounded-pill text-bg-light border"><?= htmlspecialchars($tag) ?></span>
              <?php endforeach; ?>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </main>

  <footer class="text-center text-muted small py-4 mt-5">
    Desenvolvimento Web · <?= date('Y') ?>
  </footer>
</body>
</html>
