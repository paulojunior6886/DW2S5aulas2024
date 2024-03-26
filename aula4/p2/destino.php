<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino Get</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<h1>Praticando - Calculadora média</h1>
    <hr>

    <?php
    //print_r($_POST)

    $n1 = filter_input(INPUT_GET, "n1", FILTER_SANITIZE_SPECIAL_CHARS);
    $n2 = filter_input(INPUT_GET, "n2", FILTER_SANITIZE_SPECIAL_CHARS);
    $n3 = filter_input(INPUT_GET, "n3", FILTER_SANITIZE_SPECIAL_CHARS);
    $media = ($n1 + $n2 + $n3) /3;
    $aprovado = "Aprovado";
    $recu = "De recuperação";
    $reprovado = "Reprovado";

    //echo "<p>O nome informado é: $nome <br> E o email: $email </p>";
    echo "<p> um aluno com as notas $n1, $n2, $n3 tem média igual a $media </p>";

    if ($media >= 6) {
        echo "Com essa média, o aluno está <span class='aprovado'>$aprovado</span>";
    }
    if ($media <= 6 && $media >= 4) {
        echo "Com essa média, o aluno está <span class='recu'>$recu</span>";
    }
    if ($media < 4) {
        echo "Com essa média, o aluno está <span class='reprovado'>$reprovado</span>";
    }

    ?>

    <style>
        body {
            background-color: <?php echo $cor; ?>;
            padding: 20px;
        }
        #imgs{
            text-align: center;
        }
        .aprovado{
            color: greenyellow;
            font-weight: bold;
            text-decoration: underline;
            font-size: large;
        }
        .recu{
            color: yellow;
            font-weight: bold;
            text-decoration: underline;
            font-size: large;
        }
        .reprovado{
            color: red;
            font-weight: bold;
            text-decoration: underline;
            font-size: large;
        }
    </style>

    <!--<a href="formulario.html">Voltar ao formulário</a>-->

    

    <p>
        <a href="formulario-notas.html">
            Calcular novamente
        </a>
    </p>

    

</body>

</html>

