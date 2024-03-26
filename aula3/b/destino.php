<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Destino</h1>

    <?php
    //print_r($_POST)

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>O nome informado é: $nome <br> E o email: $email </p>";

?>

<style>
    body{
        background-color: <?php echo $cor ;?>;
    }
</style>    

<a href="formulario.html">Voltar ao formulário</a>

</body>
</html>