<?php
class Animal {
  private $nome;
  private $peso;
  private $comidaPreferida;
  public static $quantidadeAnimais = 0;

  public function __construct(){
    Animal::$quantidadeAnimais++;
  }

  public function __destruct(){
    echo $this->nome . "Foi destruído";
  }

  public function __get($atributo){
    return $this->$atributo;
  }

  public function __set($nome,$valor) {
    $this->$nome = $valor;
  }
}

$a = new Animal();
$a->nome = "Lilica";
$a->peso = 3;
$a->comidaPreferida = "Qualquer coisa que de pra comer";

echo $a->nome . " " . $a->peso . " " . $a->comidaPreferida;
?>
