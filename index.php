<?php
class Funcionario {
  private $nome;
  private $cpf;
  private $dataNascimento;
  private $gerente;
  public static $quantidadeFuncionarios = 0;

  public function __construct(){
    Animal::$quantidadeFuncionarios++;
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

$a = new Funcionario();
$a->nome = "Lucio";
$a->peso = 3;
$a->comidaPreferida = "Qualquer coisa que de pra comer";

echo $a->nome . " " . $a->peso . " " . $a->comidaPreferida;
?>
