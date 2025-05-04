<?php
class localizacaoDTO {

    //put your code here
    private $idlocalizacao;
    private $nomeLocal;
    private $endereco;
    private $mapa;
    private $status;
 
    public function getIdlocalizacao() {
        return $this->idlocalizacao;
    }

    public function getNomeLocal() {
        return $this->nomeLocal;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getMapa() {
        return $this->mapa;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setIdlocalizacao($idlocalizacao): void {
        $this->idlocalizacao = $idlocalizacao;
    }

    public function setNomeLocal($nomeLocal): void {
        $this->nomeLocal = $nomeLocal;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    public function setMapa($mapa): void {
        $this->mapa = $mapa;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }




}
