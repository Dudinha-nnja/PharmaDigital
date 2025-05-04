<?php

require_once '../DTO/tipomedicamentoDTO.php';
require_once '../DAO/tipomedicamentoDAO.php';
//dados do formulario
$descricao = $_POST["descricao"];

//var_dump($_POST);DIE;
$tipomedicamentoDTO = new tipomedicamentoDTO();
$tipomedicamentoDTO->setDescricao($descricao);


$tipomedicamentoDAO = new tipomedicamentoDAO();
$tipomedicamentoDAO->salvar($tipomedicamentoDTO);


echo "<script>";
echo "alert('Tipo de Medicamento cadastrado  com sucesso!');";
echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMmedicacoes.php';";
echo "</script> ";

