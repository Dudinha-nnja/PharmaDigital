<?php

require_once '../DTO/agendamentoDTO.php';
require_once '../DAO/agendamentoDAO.php';

require_once '../DTO/medicamentosDTO.php';
require_once '../DAO/medicamentosDAO.php';
//dados do formulario
error_reporting(0);
$vacina = $_REQUEST["vacina"];
$opc = $_REQUEST["opc"];
$idagendamento = $_REQUEST["idagendamento"];
$data = $_REQUEST["data"];
$status = $_REQUEST["status"];
$idusuario = $_REQUEST["idusuario"];
$idmedicamentos = $_REQUEST["idmedicamentos"];
$quantidadeSolicitada = $_REQUEST["quantidadeSolicitada"];

switch ($opc) {
    case "cadastrar":
        $agendamentoDTO = new agendamentoDTO();
        $agendamentoDTO->setData($data);
        $agendamentoDTO->setIdusuario($idusuario);
        $agendamentoDTO->setIdmedicamentos($idmedicamentos);
        $agendamentoDTO->setQuantidadeSolicitada($quantidadeSolicitada);

        $agendamentoDAO = new agendamentoDAO();
        /////////VERIFICA SEM TEM AGENDAMENTO
        $verificaAgendamento = $agendamentoDAO->verificaAgendamento($idmedicamentos, $idusuario, $data);
        //var_dump($verificaAgendamento);die;
        if ($verificaAgendamento) {
            if ($vacina != "vacina") {
                echo "<script>";
                echo "alert('Já existe um agendamento para essa Data e Medicamento');";
                echo"window.location.href='http://localhost/PharmaDigital/VIEW/agendamentoMedica.php';";
                echo "</script> ";
            } else {
                echo "<script>";
                echo "alert('Já existe um agendamento para essa Data e Vacina');";
                echo"window.location.href='http://localhost/PharmaDigital/VIEW/agendamentoVacina.php';";
                echo "</script> ";
            }
        } else {

            $agendamentoDAO->salvar($agendamentoDTO);

            $medicamentosDAO = new medicamentosDAO();
            $medicamentosDAO->subtrair($idmedicamentos, $quantidadeSolicitada);

            if ($vacina != "vacina") {
                echo "<script>";
                echo "alert('Agendamento cadastrado  com sucesso!');";
                echo"window.location.href='http://localhost/PharmaDigital/VIEW/agendamentoMedica.php';";
                echo "</script> ";
            } else {
                echo "<script>";
                echo "alert('Vacina cadastrada  com sucesso!');";
                echo"window.location.href='http://localhost/PharmaDigital/VIEW/agendamentoVacina.php';";
                echo "</script> ";
            }
        }
        break;
    case "editar":
        $agendamentoDTO = new agendamentoDTO();
        $agendamentoDTO->setNomeMedicamento($nomeMedicamento);
        $agendamentoDTO->setQuantidade($quantidade);
        $agendamentoDTO->setIdmedicamentos($idmedicamentos);

        $agendamentoDAO = new agendamentoDAO();
        $agendamentoDAO->editar($agendamentoDTO);

        if ($vacina != "vacina") {
            echo "<script>";
            echo "alert('Medicamento Editado  com sucesso!');";
            echo"window.location.href='http://localhost/PharmaDigital/VIEW/agendamentoMedica.php';";
            echo "</script> ";
        } else {
            echo "<script>";
            echo "alert('Vacina Editada  com sucesso!');";
            echo"window.location.href='http://localhost/PharmaDigital/VIEW/agendamentoVacina.php';";
            echo "</script> ";
        }
        break;

    case "excluir";
        $agendamentoDAO = new agendamentoDAO();
        $agendamentoDAO->excluir($idagendamento);
//         var_dump($idmedicamentos,$quantidadeSolicitada);die;
        $medicamentosDAO = new medicamentosDAO();
        $medicamentosDAO->somar($idmedicamentos, $quantidadeSolicitada);

        echo "<script>";
        echo "alert('Agendamento Excluido  com sucesso!');";
        echo"window.location.href='http://localhost/PharmaDigital/VIEW/meusAgendamentos.php';";
        echo "</script> ";
        break;
    case "agendamento":
        $status = 2;
        $agendamentoDTO = new agendamentoDTO();
        $agendamentoDTO->setStatus($status);
        $agendamentoDTO->setIdagendamento($idagendamento);

        $agendamentoDAO = new agendamentoDAO();
        $agendamentoDAO->retirada($status, $idagendamento);

        echo "<script>";
        echo "alert('Medicamento Retirado  com sucesso!');";
        echo"window.location.href='http://localhost/PharmaDigital/VIEW/meusAgendamentos.php';";
        echo "</script> ";
        break;
}


//var_dump($_POST);DIE;



    