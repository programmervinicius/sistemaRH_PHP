<?php

class Funcionario {
  private $nome;
  private $cpf;
  private $dataNascimento;
  private $gerente;
  private $departamento;
  private $salario;
  public static $quantidadeFuncionarios = 0;

  public function __construct(){
    Funcionario::$quantidadeFuncionarios++;
  }

  public function __destruct(){
  }

  public function __get($atributo){
    return $this->$atributo;
  }

  public function __set($nome,$valor) {
    $this->$nome = $valor;
  }
}

?>
