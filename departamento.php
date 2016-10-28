<?php
class Departamento{
  private $nome;
  public static $quantidadeDepartamentos = 0;

  public function __construct(){
    Animal::$quantidadeDepartamentos++;
  }

  public function __destruct(){
    #echo $this->nome . "Foi destruído";
  }

  public function __get($atributo){
    return $this->$atributo;
  }

  public function __set($nome,$valor) {
    $this->$nome = $valor;
  }
}

$a = new Departamento();
$a->nome = "Vendas";

echo $a->nome;
?>
