
<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php"); // Redireciona para a página de login
    exit();
}
//include_once '../configuracaoWeb.html';
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/button.css">
        <title>Cadastro de Medicações Administradores</title>
        <link rel="stylesheet" href="css/records.css">
        <link rel="stylesheet" href="css/modal.css">
        <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <script src="script.js" defer></script>
        <link rel="shortcut icon" href="../IMAGENS/4 (1).png" type="image/x-icon">
        <script src="main.js" defer></script>
        <!--MEU ESTILO-->
        <link rel="stylesheet" href="../CSS/meuEstilo.css">
        <title>Cadastrar medicamento</title>
    </head>
    <body>
        <nav class="sidebar locked">
            <div class="logo_items flex">
                <span class="nav_image">
                    <img src="../IMAGENS/4 (1).png " alt="logo_img" />
                </span>
                <span class="logo_name">Pharma Digital</span>
                <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
                <i class="bx bx-x" id="sidebar-close"></i>
            </div>
            <div class="menu_container">
                <div class="menu_items">
                    <ul class="menu_item">
                        <li class="item">
                            <a href="ADMindex.php" class="link flex">
                                <i class="fa-solid fa-house"></i>
                                <span>Pagina inicial</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="ADMlocalizacao.php" class="link flex">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Localização</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu_item">
                        <div class="menu_title flex">
                            <span class="title">Serviços</span>
                            <span class="line"></span>
                        </div>
                        <li class="item">
                            <a href="ADMmedicacoes.php" class="link flex">
                                <i class="fa-sharp fa-solid fa-pills"></i>
                                <span>Medicações</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="ADMvacinacoes.php" class="link flex">
                                <i class="fa-solid fa-syringe"></i>
                                <span>Vacinações</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="ADMagendamentos.php" class="link flex">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>Agendamentos</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu_item">
                        <div class="menu_title flex">
                            <span class="title">Setting</span>
                            <span class="line"></span>
                        </div>
                        <li class="item">
                            <a href="ADMajuda.php" class="link flex">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Informações</span>
                            </a>
                        </li>
                        <?php if ($_SESSION["usuario"]) { ?>
                            <li class="item">
                                <a href="../CONTROLLER/logoffController.php" class="link flex">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    <span>Sair</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="item">
                                <a href="login.php" class="link flex">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <?php
            require_once '../DAO/medicamentosDAO.php';
            $idmedicamentos = $_REQUEST["idmedicamentos"];
            $medicamentosDAO = new medicamentosDAO();
            $medicamentos = $medicamentosDAO->selecionaID($idmedicamentos);
            $nomeMedicamento = $medicamentos["nomeMedicamento"];
            $quantidade = $medicamentos["quantidade"];
            ?>
            <div class="modal-content">
                <header class="modal-header">
                    <h2>Editar medicamento</h2>
                </header>
                <form class="modal-form" action="../CONTROLLER/medicamentoController.php" method="post">
                    <input type="hidden" name="idmedicamentos" value="<?=$idmedicamentos?>">
                    <input type="hidden" name="opc" value="editar">
                    <input type="text" class="modal-field" placeholder="Nome do medicamento" name="nomeMedicamento" value="<?= $nomeMedicamento ?>">
                    <input type="text" class="modal-field" placeholder="Quantidade" name="quantidade" value="<?= $quantidade ?>">
                    <footer class="modal-footer">
                        <a href="ADMmedicacoes.php" style="text-decoration: none;font-size: 26px;"><i class="fa-solid fa-arrow-left" title="Voltar"></i></a>
                        &nbsp; &nbsp; &nbsp; &nbsp;
                        <button class="button red">Editar</button>
                        <button class="button blue">Cancelar</button>
                    </footer>
                </form>
            </div>
        </main>
    </body>
</html>