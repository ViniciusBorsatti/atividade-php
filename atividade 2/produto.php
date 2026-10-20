<?php
abstract class Produto {
  public function __construct(protected string $nome, protected float $preco) {}

  abstract public function frete():float;
  public function descricao():string{
    return "{$this->nome}: R$ {$this->preco}";
  }
  public function total():float {
    return $this->preco + $this->frete();
  }
}

class ProdutoFisico extends Produto {
    public function __construct(string $nome, float $preco, private float $pesoKg){
      parent::__construct($nome, $preco);
    }

    public function frete():float {
      return $this->pesoKg * 5;
    }
}

class ProdutoDigital extends Produto {
    public function __construct(string $nome, float $preco, private string $link){
      parent::__construct($nome, $preco);
    }
  
    public function descricao():string{
    return parent::descricao() . " (download) ";
  }

    public function frete():float {
      return 0;
    }

}

class ProdutoComDesconto extends ProdutoFisico {
    public function __construct(string $nome, float $preco, float $pesoKg, private float $desconto){
      parent::__construct($nome, $preco, $pesoKg);
    }

    public function total():float {
      return $this->preco * (1 - $this->desconto / 100) + $this->frete();
    }
}

$t = new ProdutoFisico("Tênis", 249.9, 1.2);
echo $t->descricao();
$t = new ProdutoDigital("E-book PHP", 49.9, "ebooktopzeradasgalaxia.com/php.pdf");
echo $t->descricao();