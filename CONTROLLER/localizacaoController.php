<?php

require_once '../DTO/localizacaoDTO.php';
require_once '../DAO/localizacaoDAO.php';
//dados do formulario
error_reporting(0);
$opc = $_REQUEST["opc"];
$idlocalizacao = $_REQUEST["idlocalizacao"];
$nomeLocal = $_REQUEST["nomeLocal"];
$endereco = $_REQUEST["endereco"];
$mapa = $_REQUEST["mapa"];
$status = $_REQUEST["status"];
if ($status == 1) {
    $status2 = 0;
}
if ($status == 0) {
    $status2 = 1;
}

//var_dump($_REQUEST);
switch ($opc) {
    case "cadastrar":
        $localizacaoDTO = new localizacaoDTO();
        $localizacaoDTO->setNomeLocal($nomeLocal);
        $localizacaoDTO->setEndereco($endereco);
        $localizacaoDTO->setMapa($mapa);

        $localizacaoDAO = new localizacaoDAO();
        $localizacaoDAO->salvar($localizacaoDTO);

        echo "<script>";
        echo "alert('Localização cadastrado  com sucesso!');";
        echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMlocalizacao.php';";
        echo "</script> ";
        break;
    case "editar":
        $localizacaoDTO = new localizacaoDTO();
        $localizacaoDTO->setNomeLocal($nomeLocal);
        $localizacaoDTO->setEndereco($endereco);
        $localizacaoDTO->setIdlocalizacao($idlocalizacao);

        $localizacaoDAO = new localizacaoDAO();
        $localizacaoDAO->editar($localizacaoDTO);

        echo "<script>";
        echo "alert('Localização Editada  com sucesso!');";
        echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMlocalizacao.php';";
        echo "</script> ";
        break;
    case "status":
        $localizacaoDTO = new localizacaoDTO();
        $localizacaoDTO->setStatus($status2);
        $localizacaoDTO->setIdlocalizacao($idlocalizacao);

        $localizacaoDAO = new localizacaoDAO();
        $localizacaoDAO->status($status2,$idlocalizacao);

        echo "<script>";
        echo "alert('Status alterado com sucesso!');";
        echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMlocalizacao.php';";
        echo "</script> ";
        break;

    case "excluir";
        $medicamentosDAO = new medicamentosDAO();
        $medicamentosDAO->excluir($idmedicamentos);
        echo "<script>";
        echo "alert('Medicamento Excluido  com sucesso!');";
        echo"window.location.href='http://localhost/PharmaDigital/VIEW/ADMlocalizacao.php';";
        echo "</script> ";
        break;
}


//var_dump($_POST);DIE;


