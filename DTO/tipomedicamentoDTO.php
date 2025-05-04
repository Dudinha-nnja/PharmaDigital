<?php

class tipomedicamentoDTO {

    private $idtipoMedicamento;
    private $descricao;

    function getIdtipoMedicamento() {
        return $this->idtipoMedicamento;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setIdtipoMedicamento($idtipoMedicamento) {
        $this->idtipoMedicamento = $idtipoMedicamento;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}
