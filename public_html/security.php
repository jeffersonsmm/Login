<?php

$_SG['startSession'] = true;
$_SG['validated'] = true;
$_SG['login'] = 'login.php';

if ($_SG['startSession'] == true) {
    session_start();
}

function validate($user, $pwd) {
    global $_SG;
    //if ((sha1($user)=='d033e22ae348aeb5660fc2140aec35850c4da997' and sha1($pwd)=='7110eda4d09e062aa5e4a390b0a572ac0d2c0220')) {
    if ($user == 'admin' and $pwd == 'admin') {
        $_SESSION['userID'] = '1';
        $_SESSION['userName'] = $user;
        if ($_SG['validated'] == true) {
            $_SESSION['userLogin'] = $user;
            $_SESSION['userPwd'] = $pwd;
        }
        return true;
    } else {
        return false;
    }
}

function protectPag() {
    if (!isset($_SESSION['userName'])) {
        echo ("aqui");
        logOut();
    } else if (!validate($_SESSION['userName'], $_SESSION['userPwd'])) {
        echo "aqui2";
        logOut();
    }

    if (!isset($_SESSION['userID']) OR !isset($_SESSION['userName'])) {
        // Não há usuário logado, manda pra página de login
        logOut();
    } else if (isset($_SESSION['userID']) OR isset($_SESSION['userName'])) {
        // Verifica se os dados salvos na sessão batem
        if (!validate($_SESSION['userLogin'], $_SESSION['userPwd'])) {
            // Os dados não batem, manda pra tela de login
            logOut();
        }
    }else{
        logOut();
    }
}

function logOut() {
    global $_SG;
    unset($_SESSION['userID'], $_SESSION['userName'], $_SESSION['userLogin'], $_SESSION['userPwd']);
    header("Location: ".$_SG['login']);
}