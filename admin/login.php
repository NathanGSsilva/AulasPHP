<?php
session_start();

$email = 'nathan@gmail.com';
$senha = '123456';
$nome = 'Mestre Nathan';

if (isset($_SESSION['logado'])) {

    if ($_SESSION['logado'] == true) {
        header('location: dashboar.php');
        exit;
    }
}

if (isset($_COOKIE['lembrar'])) {

    if ($_COOKIE['lembrar'] == $email) {
        $_SESSION['nome'] = $nome;
        $_SESSION['logado'] = true;
        header('location: dashboard.php');
        exit;
    }
}


if (isset($_POST['btnEntrar'])) {
    if ($email == $_POST['email'] && $senha == $_POST['senha']) {

        $_SESSION['nome'] = $nome;
        $_SESSION['logado'] = true;

        $lembra = isset($_POST['lembrar']) ? true : false;

        if($lembra){
            setcookie("lembrar", $email, time() + 86400 * 30, "/");
        }

        header('Location: dashboard.php');
        exit;
    } else {
        $erro = 'email ou senha incorreto!';
    }
}

?>

<?php  
    require_once "includes/cabecalho.php"
?>

    <div class="container d-flex vh-100 justify-content-center align-items-center ">
        <div id="login" class="border p-5 rounded shadow-lg ">
            <h2 class="text-center">Login</h2>


            <?php
            if (isset($erro)) : ?>

                <div class="alert alert-danger"><?= $erro ?></div>
            <?php endif; ?>




            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="text" name="senha" id="senha" class="form-control">
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="lembrar" id="lembrar" >
                    <label class="form-check-label" for="lembrar" >Lembrar-me</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" name="btnEntrar" class="btn btn-primary w-100">Entrar</button>
                </div>
            </form>

        </div>
    </div>

<?php 
    require_once 'includes/rodape.php'
?>
    