<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .dados {
            border: solid green 2px;
        }
    </style>
</head>

<body>

    <h1>Destino</h1>
    <a href="interesses.html">Voltar</a>
    <hr>
    <h2>Dados da requisição:</h2>

    <div class="dados">
        <pre>
            <?php var_dump($_POST); ?>
        </pre>
    </div>

    <?php
    // Ordenar os interesses
    sort($_POST['interesses']);

    // Limitar a quantidade de itens
    $interesses = array_slice($_POST['interesses'], 0, 3);

    // Contar o número de itens selecionados
    $num_itens = count($_POST['interesses']);

    // Exibir os itens
    echo "<h1>Seus principais interesses:</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($interesses); $i++) {
        echo "<li>" . $interesses[$i] . "</li>";
    }
    if ($num_itens > 3) {
        echo "<li>...</li>";
    }
    echo "</ul>";
    ?>


</body>

</html>
