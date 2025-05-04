<?php

class agendamentoDTO {

    //put your code here
    private $idagendamento;
    private $data;
    private $status;
    private $idusuario;
    private $quantidadeSolicitada;
    private $idmedicamentos;
    
    public function getIdagendamento() {
        return $this->idagendamento;
    }

    public function getData() {
        return $this->data;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function getQuantidadeSolicitada() {
        return $this->quantidadeSolicitada;
    }

    public function getIdmedicamentos() {
        return $this->idmedicamentos;
    }

    public function setIdagendamento($idagendamento): void {
        $this->idagendamento = $idagendamento;
    }

    public function setData($data): void {
        $this->data = $data;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public function setIdusuario($idusuario): void {
        $this->idusuario = $idusuario;
    }

    public function setQuantidadeSolicitada($quantidadeSolicitada): void {
        $this->quantidadeSolicitada = $quantidadeSolicitada;
    }

    public function setIdmedicamentos($idmedicamentos): void {
        $this->idmedicamentos = $idmedicamentos;
    }


}
