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

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - BookMeNow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        #login {
            flex-basis: 400px;
            flex-grow: 0;
            flex-shrink: 1;
            /* flex: 0 1 600px  é a mesma coisa que os 3 comandos ali em cima*/
        }
    </style>
</head>

<body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>