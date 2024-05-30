<?php
require 'header.php';
?>
<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Página para excluir contato</h1>
    </div>
    <div class="row">
        <?php
        // Filtra e sanitiza o ID
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        
        // Adiciona uma verificação se o ID é válido
        if ($id && is_numeric($id)) {
            require "conexao.php";

            $sql = "DELETE FROM contato WHERE id = ?";
            $result = false;  // Inicializa a variável $result
            $error = "";  // Inicializa a variável $error

            try {
                $stmt = $conn->prepare($sql);
                $result = $stmt->execute([$id]);
            } catch (Exception $e) {
                $result = false;
                $error = $e->getMessage();
            }

            if ($result === true) {
            ?>
                <div class="alert alert-success" role="alert">
                    <h4>Registro apagado com sucesso!</h4>
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Falha ao efetuar exclusão.</h4>
                    <p><?php echo $error; ?></p>
                </div>
            <?php
            }
        } else {
            // Exibe mensagem de erro se o ID não for válido
            ?>
            <div class="alert alert-danger" role="alert">
                <h4>ID inválido.</h4>
                <p>O ID fornecido para exclusão é inválido.</p>
            </div>
            <?php
        }
        ?>
        <a href="listagem.php" class="btn btn-info ms-5" role="button">Voltar</a>
    </div>
</div>

<?php
require 'footer.php';
?>
