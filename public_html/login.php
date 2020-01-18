<?php
include 'checkData.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta name="author" content="Jefferson Silvio Meireles de Matos">
    <meta name="description" content="" />
    <meta name="keywords" content=""/>
    <meta name="robots" content="index, no-follow">
    <title>Teste</title>


    <script src="functions.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
<div class="row mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4 mt-5 p-3 bg rounded">
        <form class="needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 class="h3 mb-3 font-weight-normal text-light">LOGIN</h1>
            <label for="usuario" class="sr-only">Usuário</label>
            <input type="text" name="usuario" id="usuario" class="form-control my-3"
                   placeholder="Usuário" required="" autofocus="">
            <div class="invalid-feedback mb-2">* Digite um usuário valido</div>
            <label for="senha" class="sr-only">Password</label>
            <input type="password" name="senha" id="senha" class="form-control my-3"
                   placeholder="Password" required="">
            <div class="invalid-feedback mb-2">* Digite uma senha valida</div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>