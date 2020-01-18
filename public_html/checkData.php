<?php
include('security.php');
$userError = '';
$pwdError = '';
$user = '';
$pwd =  '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['usuario'])){
        $userError = 'Usuário é obrigatório';
    }else {
        $user = test_input($_POST['usuario']);
    }

    if (empty($_POST['senha'])) {
        $pwdError = 'Senha é obrigatório';
    }else {
        $pwd = test_input($_POST['senha']);
    }

    if (validate($user, $pwd) == true){
        header('Location: index.php');
    }else {
        logOut();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
