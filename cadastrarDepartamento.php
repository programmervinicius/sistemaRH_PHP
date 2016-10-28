<?php
require 'departamento.php';
require 'conn.php';

if (isset ($_POST["instanciar"])){
  $nome = $_POST["nome"];
  $d = new Departamento();
  $d->nome = $nome;
  echo $d->nome;
try {
  $sql = "INSERT INTO departamento (nome)
    VALUES ('$d->nome')";
    $conn->exec($sql);
    echo "Departamento cadastrado no banco de dados";
    } catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
    }
}
$conn = null;
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form method="post">
       <input type="text" name="nome" placeholder="Insira o nome do departamento:">
       <input type="submit" name="instanciar" value="Instanciar Depto.">
    </form>
   </body>
 </html>
