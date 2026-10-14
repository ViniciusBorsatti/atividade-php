<?php
require_once 'produto.php';
require_once 'carinho.php';

$p1 = new Produto(1, 'Teclado', 150.00, 10);
$p2 = new Produto(2, 'Mouse', 80.50, 5);
$p3 = new Produto(3, 'Monitor', 900.00, 1);

$carrinho = new Carrinho();

echo "=== Teste 1: adicionar produtos ===\n";
$carrinho->adicionar($p1, 2);
echo "Adicionado: 2x {$p1->getNome()}\n";
$carrinho->adicionar($p2);
echo "Adicionado: 1x {$p2->getNome()}\n";

echo "\n=== Teste 2: total do carrinho ===\n";
echo "Total: R$ " . number_format($carrinho->total(), 2, ',', '.') . "\n";

echo "\n=== Teste 3: produto sem estoque ===\n";
try {
    $carrinho->adicionar($p3, 5);
} catch (Exception $e) {
    echo "Erro ao adicionar {$p3->getNome()}: {$e->getMessage()}\n";
}

echo "\n=== Teste 4: total final ===\n";
echo "Total: R$ " . number_format($carrinho->total(), 2, ',', '.') . "\n";
