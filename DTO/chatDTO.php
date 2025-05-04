<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of chatDTO
 *
 * @author mayco
 */
class chatDTO {

    //put your code here
    private $idchat;
    private $data;
    private $mensagem;
    private $idusuario;

    public function getIdchat() {
        return $this->idchat;
    }

    public function getData() {
        return $this->data;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdchat($idchat) {
        $this->idchat = $idchat;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

}
