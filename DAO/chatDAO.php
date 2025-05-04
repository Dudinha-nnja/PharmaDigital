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

class chatDAO {

    //put your code here
    public $pdo = null;

    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from chat;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function PesquisarUmRegistro(chatDTO $chatDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from chat where idchat = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $chatDTO->getIdchat());
        $execucao->execute();
        $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function Gravar(chatDTO $chatDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into chat"
                . "(data,mensagem) "
                . "Values (?, ?);";

        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $chatDTO->getdata());
        $execucao->bindValue(2, $chatDTO->getmensagem());

        $resultado = $execucao->execute();
        return $resultado;
    }

    public function Alterar(chatDTO $chatDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update chat set data=?, mensagem = ?"
                . "idusuario=?"
                . " where idchat=?";

        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $chatDTO->getdata());
        $execucao->bindValue(2, $chatDTO->getmensagem());
        $execucao->bindValue(3, $chatDTO->getidusuario());
        $execucao->bindValue(4, $chatDTO->getidchat());
        $resultado = $execucao->execute();
        return $resultado;
    }

    public function Apagar(chatDTO $chatDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from chat where idchat=?";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $chatDTO->getIdchat());
        $resultado = $execucao->execute();
        return $resultado;
    }

    //fim
}
