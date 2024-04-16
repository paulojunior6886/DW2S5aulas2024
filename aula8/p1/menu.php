<?php
if (!session_id()) {
    session_start();
}
?>

<ul class="nav nav-pills">
    <li class="nav-item"><a href="conteudo.php" class="nav-link<?php echo isset($_SESSION['user']) ? '' : ' active'; ?>" aria-current="page">Início</a></li>
    <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
    <li class="nav-item"><a href="faqs.php" class="nav-link">FAQs</a></li>
    <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
    <?php if(isset($_SESSION['user'])): ?>
        <li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>
        <li class="nav-item"><a href="sair.php" class="nav-link">Sair</a></li>
    <?php else: ?>
        <li class="nav-item"><a href="entrar.php" class="nav-link">Entrar</a></li>
    <?php endif; ?>
</ul>
