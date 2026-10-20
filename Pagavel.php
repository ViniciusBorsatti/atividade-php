<?php
interface pagavel {
    public function pagar(float $valor);
}


class Pix implements pagavel {
    public function pagar(float $valor): bool {
        echo " Pix no valor de R$ $valor";
        return true;
    }
}



class Cartao  implements pagavel {
    public function pagar(float $valor): bool {
        echo " Cartao no valor de R$ $valor";
        return true;
    }
}


class Boleto implements pagavel {
    public function pagar(float $valor): bool {
        $codigo = rand(10000, 99999) . "." . rand(10000, 99999) . " " . rand(10000, 99999) . "." . rand(100000, 999999);
        echo " Boleto no valor de R$ $valor - Codigo de barras: $codigo";
        return true;
    }
}
