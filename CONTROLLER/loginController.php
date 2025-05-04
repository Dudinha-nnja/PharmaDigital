<?php

session_start();
require_once '../DAO/LoginDAO.php';

//$email = $_POST["email"];
$usuario = $_POST["email"];
$senha = $_POST["senha"];
$loginDAO = new LoginDAO();
$usuario = $loginDAO->login($usuario, $senha);

if (!empty($usuario)) {
    $_SESSION["usuario"] = $usuario["usuario"];
    $_SESSION["perfil"] = $usuario["perfil"];
    $_SESSION["idusuario"] = $usuario["idusuario"];
    if ($_SESSION["perfil"] == "Administrador") {
        echo "<script>";
        echo "alert('Logado em pharma digital');";
        echo "window.location.href = 'http://localhost/PharmaDigital/VIEW/ADMindex.php';";
        echo "</script> ";
    }
    if ($_SESSION["perfil"] == "Usuário") {
        echo "<script>";
        echo "alert('Logado em pharma digital');";
        echo "window.location.href = 'http://localhost/PharmaDigital/VIEW/agendamentogeral.php';";
        echo "</script> ";
    }
} else {
    echo "<script>";
    echo "alert('Usuário e/ou senha inválido');";
    echo "window.location.href = 'http://localhost/PharmaDigital/index.php';";
    echo "</script> ";
}
?>
