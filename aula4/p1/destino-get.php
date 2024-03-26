<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino Get</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <h1>Destino</h1>
    <hr>

    <?php
    //print_r($_POST)

    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

    //echo "<p>O nome informado é: $nome <br> E o email: $email </p>";
    echo "<p> $nome <br>$email </p>"

    ?>

    <style>
        body {
            background-color: <?php echo $cor; ?>;
        }
        #imgs{
            text-align: center;
        }
    </style>

    <!--<a href="formulario.html">Voltar ao formulário</a>-->

    <p>
        <a href="destino-get.php?nome=Nome Informado é: Paulo&email=Email Informado é: pj@gmail.com&cor=&cor=<?php echo $cor; ?>">
            Enviar dados [nome = Paulo | email = pj@gmail.com]
        </a>
    </p>

    <p>
        <a href="destino-get.php?nome=Nome Informado é: Junior&email=Email Informado é: js@gmail.com&cor=<?php echo $cor; ?>">
            Enviar dados [nome = Paulo | email = pj@gmail.com]
        </a>
    </p>

    <p>
        <a href="destino-get.php?">
            Apagar tudo
        </a>
    </p>

    <div class="row" id="imgs">
        <div class="col-4">
           <a href="destino-get.php?nome=<?php echo $nome; ?>&email=<?php echo $email; ?>&cor=green">
            <img src="verde.png" alt="quadrado verde com bordas pretas" width="200px">
           </a> 
        </div>
        <div class="col-4">
            <a href="destino-get.php?nome=<?php echo $nome; ?>&email=<?php echo $email; ?>&cor=yellow">
                <img src="amarelo.png" alt="quadrado amarelo com bordas pretas" width="200px">
            </a>
        </div>
        <div class="col-4">
            <a href="destino-get.php?nome=<?php echo $nome; ?>&email=<?php echo $email; ?>&cor=blue">
                <img src="azul.png" alt="quadrado azul com bordas pretas" width="200px">
            </a>
        </div>
    </div>

</body>

</html>
