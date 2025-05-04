<?php

require_once '../DTO/medicamentosDTO.php';
require_once '../DAO/medicamentosDAO.php';
//dados do formulario
error_reporting(0);
$vacina = $_REQUEST["vacina"];
$opc = $_REQUEST["opc"];
$idmedicamentos = $_REQUEST["idmedicamentos"];
$idtipoMedicamento = $_REQUEST["idtipoMedicamento"];
$nomeMedicamento = $_REQUEST["nomeMedicamento"];
$quantidade = $_REQUEST["quantidade"];
$idlocalizacao = $_REQUEST["idlocalizacao"];
//var_dump($_REQUEST);
switch ($opc) {
    case "cadastrar":
        $medicamentosDTO = new medicamentosDTO();
        $medicamentosDTO->setNomeMedicamento($nomeMedicamento);
        $medicamentosDTO->setQuantidade($quantidade);
        $medicamentosDTO->setIdtipoMedicamento($idtipoMedicamento);
        $medicamentosDTO->setIdlocalizacao($idlocalizacao);

        $medicamentosDAO = new medicamentosDAO();
        $medicamentosDAO->salvar($medicamentosDTO);

        if ($vacina != "vacina") {
            echo "<script>";
            echo "alert('Medicamento cadastrado  com sucesso!');";
            echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMmedicacoes.php';";
            echo "</script> ";
        } else {
            echo "<script>";
            echo "alert('Vacina cadastrada  com sucesso!');";
            echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMvacinacoes.php';";
            echo "</script> ";
        }
        break;
    case "editar":
        $medicamentosDTO = new medicamentosDTO();
        $medicamentosDTO->setNomeMedicamento($nomeMedicamento);
        $medicamentosDTO->setQuantidade($quantidade);
        $medicamentosDTO->setIdmedicamentos($idmedicamentos);
        //var_dump($medicamentosDTO);
//        die;
        $medicamentosDAO = new medicamentosDAO();
        $medicamentosDAO->editar($medicamentosDTO);

        if ($vacina != "vacina") {
            echo "<script>";
            echo "alert('Medicamento Editado  com sucesso!');";
            echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMmedicacoes.php';";
            echo "</script> ";
        } else {
            echo "<script>";
            echo "alert('Vacina Editada  com sucesso!');";
            echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMvacinacoes.php';";
            echo "</script> ";
        }
        break;

    case "excluir";
        $medicamentosDAO = new medicamentosDAO();
        $medicamentosDAO->excluir($idmedicamentos);
        if ($vacina != "vacina") {
            echo "<script>";
            echo "alert('Medicamento Excluido  com sucesso!');";
            echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMmedicacoes.php';";
            echo "</script> ";
        } else {
            echo "<script>";
            echo "alert('Vacina Excluido  com sucesso!');";
            echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMvacinacoes.php';";
            echo "</script> ";
        }
        break;
}


//var_dump($_POST);DIE;


