<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PacienteDAO
 *
 * @author alunoetc
 */
require_once 'Conexao/Conexao.php';

class perfilDAO {

    //put your code here
    public $pdo = null;

    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from perfil;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function PesquisarUmRegistro(perfilDTO $perfilDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from perfil where idperfil = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $perfilDTO->getIdperfil());
        $execucao->execute();
        $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function Gravar(perfilDTO $perfilDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into perfil"
                . "(usuario) "
                . "Values (?);";

        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $perfilDTO->getusuario());

        $resultado = $execucao->execute();
        return $resultado;
    }

    public function Alterar(perfilDTO $perfilDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update perfil set usuario=?"
                . " where idperfil=?";

        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $perfilDTO->getusuario());
        $execucao->bindValue(2, $perfilDTO->getidperfil());
        $resultado = $execucao->execute();
        return $resultado;
    }

    public function Apagar(perfilDTO $perfilDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from perfil where idperfil=?";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $perfilDTO->getIdperfil());
        $resultado = $execucao->execute();
        return $resultado;
    }

    //fim
}
