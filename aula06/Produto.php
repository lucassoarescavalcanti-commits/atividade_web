<?php
class Produto{
    public $nome;
    protected $preco;
    public $estoque;

    public function titulo(){
        return "Lista de Produtos";
    }

    public function setPreco($p){
        $this->preco = $p;
    }

    public function getPreco(){
        return number_format($this->preco, 2, ",", ".");
    }

    public function __construct($n, $p, $e){
        $this->nome = $n;
        $this->preco = $p;
        $this->estoque = $e;
        echo "<h3>Novo produto criado!</h3>";
    }

    public static function loja(){
        return "<h4>Loja 01</h4>";
    }


}

interface Desconto{
    public function aplicarDesconto($desconto);
    public function valorDesconto($desconto);
}


class ProdutoDigital extends Produto implements Desconto{
    public $categoria;
    public function aplicarDesconto($desconto){
        return $this->preco -= $this->preco*($desconto/100);
    }

    public function valorDesconto($desconto){
        return $desconto . "%";
    }

    public function __construct($n, $p, $e, $c){
        parent::__construct($n, $p, $e);
        $this->categoria = $c;
    }

    public function titulo(){
        return "Lista de Produtos Digitais";
    }


}

echo Produto::loja();

$dig1 = new ProdutoDigital("Livro", 159.90, 16, "E-book");
echo "<br>Produto Digital: " . $dig1->nome;
echo "<br>Preço: R$ " . $dig1->getPreco();
echo "<br>Valor do Desconto: " . $dig1->valorDesconto(20);
echo "<br>Preço com Desconto: R$" . $dig1->aplicarDesconto(20);
echo "<br>Estoque: " . $dig1->estoque;
echo "<br>Categoria: " . $dig1->categoria;

$prod1 = new Produto("TV", 1599.90, 26);
// $prod1->nome = "TV";
// $prod1->setPreco(1599.90);
// $prod1->estoque = 26;


echo $prod1->titulo();
echo "<br>Produto: " . $prod1->nome;
echo "<br>Preço: R$ " . $prod1->getPreco();
echo "<br>Estoque: " .$prod1->estoque;




?>