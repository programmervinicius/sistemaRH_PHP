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
   <body bgcolor="#ededed">
   <style>
.demo-layout-transparent {
background: url('../assets/demos/transparent.jpg') center / cover;
}
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  color: grey;
}
</style>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
<header class="mdl-layout__header mdl-layout__header--transparent">
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <span class="mdl-layout-title">Cadastrar Departamento</span>
    <!-- Add spacer, to align navigation to the right -->
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation -->
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Página principal</a>
      <a class="mdl-navigation__link" href="">Sair</a>
    </nav>
  </div>
</header>
<div class="mdl-layout__drawer">
  <span class="mdl-layout-title">Title</span>
  <nav class="mdl-navigation">
    <a class="mdl-navigation__link" href="">Link</a>
    <a class="mdl-navigation__link" href="">Link</a>
  </nav>
</div>
<main class="mdl-layout__content">
  <div class ="mdl-grid">
    <div class = "mdl-layout mdl-cell mdl-cell--4-col mdl-cell--4-offset">
      <form method="post">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" name="nome">
          <label class="mdl-textfield__label" for="nome">Insira o nome do departamento</label>
        </div>
        <br>
    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="instanciar">
      Cadastrar departamento
    </button>
  </form>
</div>
</div>

</main>
</div>

   </body>
 </html>
