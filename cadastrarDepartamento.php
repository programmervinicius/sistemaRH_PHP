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
     <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-deep_orange.min.css" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
     <title>Cadastrar Departamento</title>
   </head>
   <body>
    <div class ="mdl-grid">
      <div class = "mdl-layout mdl-layout-spacer mdl-cell mdl-cell--4-col mdl-cell--4-offset">
        <form method="post">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="nome">
            <label class="mdl-textfield__label" for="nome">Insira o nome do departamento</label>
          </div>
          <br>
      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="instanciar">
        Cadastrar departamento
      </button>
    </form>
  </div>
   </body>
 </html>
