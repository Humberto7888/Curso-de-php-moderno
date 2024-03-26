<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charsert="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viweport" content="whidth=device-width, initial-scale=1.0"> 
    <title>Resultado</title>
    <link rel="stylesheet" href="style.CSS">

</head>

<body>
    <header>
        <h1>Resultado</h1>
  </header>
    <main>
    <?php
    echo "NOME: " . $_GET["nome"];
    echo "<br>SOBRENOME: " . $_GET["sobrenome"];
    ?>
    <a hef="javascript:history.go(-1)"> Voltar para página anterior</a>
    </main>
</body>
</html>

