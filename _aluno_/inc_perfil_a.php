<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header("Location: ind_login_a.php");
    exit();
}
?>

<!--inc_perfil-->
<div class="perfil">
    <div class="w3-container-fluid">
        <div class="w3-row">
            <div class="w3-center">
                <h2>Perfil do Aluno</h2>
                <p>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</p>
                <a href="btn_logout.php">Sair</a>
            </div>
        </div>
    </div>
</div>
<!--fim inc_perfil-->


