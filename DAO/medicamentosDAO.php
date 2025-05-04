<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class usuarioDAO
class medicamentosDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(medicamentosDTO $medicamentosDTO) {
        try {
            $sql = "INSERT INTO medicamentos (nomeMedicamento,quantidade,idtipoMedicamento,idlocalizacao)
             VALUES (?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $medicamentosDTO->getNomeMedicamento());
            $stmt->bindValue(2, $medicamentosDTO->getQuantidade());
            $stmt->bindValue(3, $medicamentosDTO->getIdtipoMedicamento());
            $stmt->bindValue(4, $medicamentosDTO->getIdlocalizacao());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM bd_pharmadigital.medicamentos AS M
                    INNER JOIN localizacao as L on L.idlocalizacao=M.idlocalizacao where idtipoMedicamento!=5 ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $medicamentos= $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $medicamentos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function selecionaTdsVacinas() {
        try {
            $sql = "SELECT * FROM bd_pharmadigital.medicamentos AS M
                    INNER JOIN localizacao as L on L.idlocalizacao=M.idlocalizacao
                    where idtipoMedicamento=5";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $medicamentos= $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $medicamentos;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($idmedicamentos) {
        try {
            $sql = "SELECT * FROM medicamentos M
                    inner join localizacao as L on L.idlocalizacao=M.idlocalizacao
                    where idmedicamentos=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idmedicamentos);
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
    public function excluir($idmedicamentos) {
        try {
            $sql = "DELETE FROM medicamentos where idmedicamentos=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idmedicamentos);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function editar(medicamentosDTO $medicamentosDTO) {
        try {
            $sql = "UPDATE medicamentos SET nomeMedicamento=?,
                                            quantidade=?
                                            WHERE idmedicamentos=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $medicamentosDTO->getNomeMedicamento());
            $stmt->bindValue(2, $medicamentosDTO->getQuantidade());
            $stmt->bindValue(3, $medicamentosDTO->getIdmedicamentos());
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


    //somar vaga
    public function subtrair($idmedicamentos,$quantidadeSolicitada) {
        try {
            $sql = "UPDATE medicamentos SET quantidade = quantidade - $quantidadeSolicitada WHERE idmedicamentos=$idmedicamentos";
            //var_dump($sql);die;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idmedicamentos);
            $stmt->bindValue(2, $quantidadeSolicitada);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //somar vaga
    public function somar($idmedicamentos,$quantidadeSolicitada) {
        try {
            $sql = "UPDATE medicamentos SET quantidade = quantidade + $quantidadeSolicitada WHERE idmedicamentos=$idmedicamentos";
            //var_dump($sql);die;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idmedicamentos);
            $stmt->bindValue(2, $quantidadeSolicitada);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
