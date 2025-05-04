<?php

require_once '../DTO/usuarioDTO.php';
require_once '../DAO/usuarioDAO.php';
//dados do formulario
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST ["email"];
$genero = $_POST ["genero"];
$idperfil = $_POST["idperfil"];

$usuarioDTO = new usuarioDTO();
$usuarioDTO->setUsuario($usuario);
$usuarioDTO->setSenha($senha);
$usuarioDTO->setEmail($email);
$usuarioDTO->setGenero($genero);
$usuarioDTO->setIdperfil($idperfil);

$usuarioDAO = new usuarioDAO();
$sucesso = $usuarioDAO->salvar($usuarioDTO);


echo "<script>";
echo "alert('Usuario cadastrado com sucesso!');";
echo"window.location.href='http://localhost/PharmaDigital/index.php';";
echo "</script> ";

