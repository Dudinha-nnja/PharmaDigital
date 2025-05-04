<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class usuarioDAO
class localizacaoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(localizacaoDTO $localizacaoDTO) {
        try {
            $sql = "INSERT INTO localizacao (nomeLocal,endereco,mapa)
             VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $localizacaoDTO->getNomeLocal());
            $stmt->bindValue(2, $localizacaoDTO->getEndereco());
            $stmt->bindValue(3, $localizacaoDTO->getMapa());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM localizacao";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $localizacao = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $localizacao;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($idlocalizacao) {
        try {
            $sql = "SELECT * FROM localizacao where idlocalizacao=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idlocalizacao);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT ULTIMO ID
    public function selecionaUltimoID() {
        try {
            $sql = "SELECT max(idusuario) as ultimoID from usuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //DELETE
    public function excluir($idusuario) {
        try {
            $sql = "DELETE FROM usuario where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function editar(localizacaoDTO $localizacaoDTO) {
        try {
            $sql = "UPDATE localizacao SET nomeLocal=?,
                                            endereco=?
                                            WHERE idlocalizacao=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $localizacaoDTO->getNomeLocal());
            $stmt->bindValue(2, $localizacaoDTO->getEndereco());
            $stmt->bindValue(3, $localizacaoDTO->getIdlocalizacao());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function status($status2, $idlocalizacao) {
        try {
            $sql = "UPDATE localizacao SET status=$status2
                    WHERE idlocalizacao=$idlocalizacao";
           
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $status2);
            $stmt->bindValue(2, $idlocalizacao);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //PESQUISAR
    public function pesquisar() {
        try {
            $sql = "select * from usuario as u, perfil as p where u.idPerfil = p.idPerfil;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $pesquisa = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
