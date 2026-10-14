<?php
require_once __DIR__ . '/../Conta.php';

echo "=== Exercício 2: Conta ===\n";
$conta = new Conta();
echo "Saldo inicial: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";

$conta->depositar(500);
echo "Depositou R$ 500,00 -> Saldo: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";

$conta->sacar(200);
echo "Sacou R$ 200,00 -> Saldo: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";

try {
    $conta->sacar(1000);
} catch (Exception $e) {
    echo "Tentou sacar R$ 1.000,00 -> Erro: {$e->getMessage()}\n";
}
echo "Saldo final: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";
