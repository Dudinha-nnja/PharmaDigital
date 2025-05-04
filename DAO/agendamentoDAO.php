<?php

// Conexão com o BD
require_once 'conexao/conexao.php';

// Inicio da class usuarioDAO
class agendamentoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    // INSERT
    public function salvar(agendamentoDTO $agendamentoDTO) {
        try {
            $sql = "INSERT INTO agendamento (data,idusuario,quantidadeSolicitada,idmedicamentos)
             VALUES (?,?,?,?)";
//            var_dump($sql);die;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $agendamentoDTO->getData());
            $stmt->bindValue(2, $agendamentoDTO->getIdusuario());
            $stmt->bindValue(3, $agendamentoDTO->getQuantidadeSolicitada());
            $stmt->bindValue(4, $agendamentoDTO->getIdmedicamentos());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

// SELECT TODOS
    public function selecionaTds() {
        try {
            $sql = "SELECT * FROM usuario
                    inner join perfil on idperfil=perfil_idperfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
// SELECT TODOS
    public function meusAgendamentos($idusuario) {
        try {
            $sql = "select *, date_format(data,'%d/%m/%y')as DATAFORMATADA,A.status as STATUSAGENDAMENTO from agendamento A
                    inner join medicamentos as M on M.idmedicamentos=A.idmedicamentos
                    inner join localizacao as L on L.idlocalizacao=M.idlocalizacao
                    inner join usuario as U on U.idusuario=A.idusuario
                    where U.idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //SELECT UNICO
    public function selecionaID($idusuario) {
        try {
            $sql = "SELECT * FROM usuario where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function verificaAgendamento($idmedicamentos, $idusuario, $data) {
        try {
            $sql = "SELECT * FROM agendamento where idusuario=$idusuario and idmedicamentos=$idmedicamentos and data='$data'";
            //var_dump($sql);die;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idmedicamentos);
            $stmt->bindValue(1, $idusuario);
            $stmt->bindValue(1, $data);
            $stmt->execute();
            $agendamento = $stmt->fetch(PDO::FETCH_ASSOC);
            return $agendamento;
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
    public function excluir($idagendamento) {
        try {
            $sql = "DELETE FROM agendamento where idagendamento=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idagendamento);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //UPDATE 
    public function alterar(usuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET usuario=?,
                                perfil_idperfil=?
                                WHERE idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getUsuario());
            $stmt->bindValue(2, $usuarioDTO->getPerfil_idperfil());
            $stmt->bindValue(3, $usuarioDTO->getIdusuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //UPDATE 
    public function retirada($status,$idagendamento) {
        try {
            $sql = "UPDATE agendamento SET status=?
                    WHERE idagendamento=?";
//            var_dump($sql);
//            die;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $status);
            $stmt->bindValue(2, $idagendamento);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function cancelarAgendamentoDataExpirada($status,$idagendamento,$quantidade) {
        try {
            $sql = "UPDATE agendamento SET status=?,
                                           quantidadeSolicitada=?
                    WHERE idagendamento=?";
//            var_dump($sql);
//            die;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $status);
            $stmt->bindValue(2, $quantidade);
            $stmt->bindValue(3, $idagendamento);
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
