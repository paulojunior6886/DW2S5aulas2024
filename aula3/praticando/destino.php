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

    $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
    $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
    $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);
    $imagem = filter_input(INPUT_POST, "imagem", FILTER_SANITIZE_SPECIAL_CHARS);
    $link = filter_input(INPUT_POST, "link", FILTER_SANITIZE_SPECIAL_CHARS);
    $fundo = filter_input(INPUT_POST, "fundo", FILTER_SANITIZE_SPECIAL_CHARS);


    echo "<h1>$titulo</h1><hr>";
    echo "<p>$corpo</p> ";
    echo "<img src=$imagem><br>";
    echo "<a href=$link target=blank>$link</a><br>";

?>

<style>
    body{
        color: <?php echo $cor ;?>;
        background-color: <?php echo $fundo ;?>;
        padding-left: 2%;
        padding-right: 2%;
    }
    img{
        width: 500px;
    }
    
</style>    

<a href="formulario.html">Voltar ao formulário</a>

</body>
</html>