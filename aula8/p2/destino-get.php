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
    // Recuperando valores dos cookies ou dos parâmetros GET
    $nome = isset($_COOKIE["nome"]) ? $_COOKIE["nome"] : "";
    $email = isset($_COOKIE["email"]) ? $_COOKIE["email"] : "";
    $cor = isset($_COOKIE["cor"]) ? $_COOKIE["cor"] : "";

    // Exibindo os valores recuperados
    echo "<p> $nome <br>$email </p>";
    ?>

    <style>
        body {
            background-color: <?php echo $cor; ?>;
        }

        #imgs {
            text-align: center;
        }
    </style>

    <p>
        <a href="destino-get.php?nome=Nome Informado é: Paulo&email=Email Informado é: pj@gmail.com&cor=<?php echo $cor; ?>">
            Enviar dados [nome = Paulo | email = pj@gmail.com]
        </a>
    </p>

    <p>
        <a href="destino-get.php?nome=Nome Informado é: Junior&email=Email Informado é: js@gmail.com&cor=<?php echo $cor; ?>">
            Enviar dados [nome = Junior | email = js@gmail.com]
        </a>
    </p>

    <p>
        <a href="destino-get.php?nome=&email=&cor=">
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

    <?php
   // Definindo cookies com os valores atualizados
if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['cor'])) {
    setcookie("nome", $_GET['nome'], time() + (3600), "/"); // 
    setcookie("email", $_GET['email'], time() + (3600), "/");
    setcookie("cor", $_GET['cor'], time() + (3600), "/");
}
    // Verifica se o botão de apagar foi clicado
    if(isset($_GET['clear'])) {
        setcookie("nome", "", time() - 3600); // Expira o cookie
        setcookie("email", "", time() - 3600);
        setcookie("cor", "", time() - 3600);
        // Redireciona para limpar a barra de endereço
        header("Location: destino-get.php");
    }
    ?>

</body>

</html>
