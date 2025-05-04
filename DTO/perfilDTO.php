<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of medicamentosDTO
 *
 * @author mayco
 */
class medicamentosDTO {

    //put your code here
    private $idmedicamentos;
    private $nomeMedicamento;
    private $quantidade;
    private $status;
    private $idtipoMedicamento;
    private $idlocalizacao;

    public function getIdmedicamentos() {
        return $this->idmedicamentos;
    }

    public function getNomeMedicamento() {
        return $this->nomeMedicamento;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getIdtipoMedicamento() {
        return $this->idtipoMedicamento;
    }

    public function getIdlocalizacao() {
        return $this->idlocalizacao;
    }

    public function setIdmedicamentos($idmedicamentos) {
        $this->idmedicamentos = $idmedicamentos;
    }

    public function setNomeMedicamento($nomeMedicamento) {
        $this->nomeMedicamento = $nomeMedicamento;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setIdtipoMedicamento($idtipoMedicamento) {
        $this->idtipoMedicamento = $idtipoMedicamento;
    }

    public function setIdlocalizacao($idlocalizacao) {
        $this->idlocalizacao = $idlocalizacao;
    }

}
