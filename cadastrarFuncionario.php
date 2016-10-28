<?php
require 'funcionario.php';
require 'departamento.php';

if (isset($_POST['instanciar'])){
  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];

  $a = new Funcionario();
  $a->nome = $nome;
  $a->cpf = $cpf;
  $a->departamento;
  echo $a->nome . $a->cpf;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Funcionário</title>
  </head>
  <body>
  <form method="post">
    <input type="text" name="nome" placeholder="Insira o Nome:"><br>
    <input type="text" name="cpf" placeholder="Insira o CPF"><br>
    <input type="submit" name="instanciar" value="Instanciar">
    <input type="option" name="name" value="dsa">    
  </form>
  </body>
</html>
