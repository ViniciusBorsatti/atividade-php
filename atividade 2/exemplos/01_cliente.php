<?php
require_once __DIR__ . '/../Cliente.php';

echo "=== Exercício 1: Cliente ===\n";
$c = new Cliente('Vinicius', 'vinicius@email.com');
echo "Nome: {$c->getNome()}\n";
echo "Email: {$c->getEmail()}\n";

$c->setNome('Vinicius Borsatti');
echo "Nome alterado: {$c->getNome()}\n";

try {
    $c->setEmail('email-invalido');
} catch (InvalidArgumentException $e) {
    echo "Erro: {$e->getMessage()}\n";
}
echo "Email continua: {$c->getEmail()}\n";
