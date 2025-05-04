<?php

class usuarioDTO {

    private $idusuario;
    private $usuario;
    private $senha;
    private $email;
    private $genero;
    private $idperfil;

    function getIdusuario() {
        return $this->idusuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getGenero() {
        return $this->genero;
    }

    function getIdperfil() {
        return $this->idperfil;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setIdperfil($idperfil) {
        $this->idperfil = $idperfil;
    }



}
