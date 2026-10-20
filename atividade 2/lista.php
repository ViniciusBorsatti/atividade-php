<?php
require_once __DIR__ . '/produto.php';

$itens = [
  new ProdutoFisico("Tênis", 249.9, 1.2),
  new ProdutoDigital("E-book PHP", 49.9, "ebooktopzeradasgalaxia.com/php.pdf"),
  new ProdutoComDesconto("Camiseta", 100, 0.5, 10),
];

echo "\n";
foreach ($itens as $item) {
  echo $item->descricao() . " - Total: R$ " . $item->total() . "\n";
}
