<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino Get</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php

session_start();

// Inicializa o array de animais clicados se não estiver definido
if (!isset($_SESSION['ultimos_clicados'])) {
    $_SESSION['ultimos_clicados'] = array();
}

// Adiciona o animal clicado à lista de últimos clicados
if (isset($_GET['animal']) && isset($_GET['info'])) {
    $animal = filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);
    $info = filter_input(INPUT_GET, "info", FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['ultimos_clicados'][] = array('animal' => $animal, 'info' => $info);
}

// Limita o número de últimos clicados a serem exibidos
$max_animals_to_display = 100;
$ultimos_clicados = array_slice($_SESSION['ultimos_clicados'], -$max_animals_to_display);
// Limpa todos os animais clicados se o parâmetro 'ul' estiver presente na URL
if (isset($_GET['limpar'])) {
    $_SESSION['ultimos_clicados'] = array();
}
?>


    <h1>Praticando 3 - Animais</h1>
    <hr>
    <div class="row" id="imgs">
        <div class="col-3">
            <a href="bichos.php?animal=Cachorro&info=Cachorro, é um mamífero carnívoro da família dos canídeos, subespécie do lobo, e talvez o mais antigo animal domesticado pelo ser humano.">
                <img src="pug.jpg" alt="Cachorro" width="200px" class="animal-img">
            </a>
        </div>
        <div class="col-3">
            <a href="bichos.php?animal=Gato&info=Gato é um mamífero carnívoro da família dos felídeos, muito popular como animal de estimação.">
                <img src="gato.jpg" alt="Gato" width="250px" class="animal-img">
            </a>
        </div>
        <div class="col-3">
            <a href="bichos.php?animal=Raposa do Deserto&info=O feneco (Vulpes zerda) ou raposa-do-deserto, é uma pequena raposa crepuscular nativa do deserto do Saara e da Península do Sinai.">
                <img src="raposadodeserto.jpg" alt="Raposa do Deserto" width="200px" class="animal-img">
            </a>
        </div>
        <div class="col-3">
            <a href="bichos.php?animal=Cão de Pradaria&info=Os cães-da-pradaria-de-cauda-preta são oriundos das vastas pradarias dos países da América do Norte.">
                <img src="caodepradaria.jpg" alt="Cão de Pradaria" width="200px" class="animal-img">
            </a>
        </div>
    </div>
    <hr>

    <?php
    $animal = filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);
    $info = filter_input(INPUT_GET, "info", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($animal && $info) {
        echo "<p>Você clicou no</p><b>$animal</b>";
        echo "<p>$info</p>";
    }
    ?>

    <!-- Botão HTML para limpar tudo -->
    <a href="bichos.php?limpar"><button>Limpar Tudo</button></a>
    

    <h1>Últimos clicados:</h1>
    <div class="ultimos-clicados">
        <?php
        foreach ($ultimos_clicados as $animal) {
            echo "<p><b>{$animal['animal']}</b>: {$animal['info']}</p>";
        }
        
        ?>
    </div>
    <style>
        body {
            background-color: #f0f0f0;
        }

        #imgs {
            text-align: center;
        }

        h1 {
            padding-left: 70px;
        }

        .animal-img {
            border: 2px solid transparent;
            transition: border-color 0.8s ease-in-out;
        }

        .animal-img:hover {
            border-color: black;
        }
        .ultimos-clicados {
            margin-left: 70px;
        }
    </style>



</body>

</html>