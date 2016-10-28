<?php
require 'departamento.php';

if (isset ($_POST["instanciar"])){
  $nome = $_POST["nome"];
  $d = new Departamento();
  $d->nome = $nome;
  echo $d->nome;
}





 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <input type="text" name="nome" placeholder="Insira o nome do departamento:">
     <input type="submit" name="instanciar" value="Instanciar Depto.">
   </body>
 </html>
