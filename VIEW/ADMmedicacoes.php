
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
        <header>
            <h1 class="header-title">Cadastro de medicamentos</h1>
        </header>
        <main>
            <button type="button" class="button blue mobile" id="cadastrarTipoMedicamento">Tipo de Medicamento&nbsp;&nbsp;&nbsp;&nbsp;</button>
            <button type="button" class="button green mobile" id="cadastrarMedicamento">Cadastrar medicamento</button>
            <table class="records">
                <thead>
                    <tr style="color: white;">
                        <th>Medicamento</th>
                        <th>Localização</th>
                        <th>Quantidade</th>
                        <th>Disponível</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once '../DAO/medicamentosDAO.php';
                    $medicamentosDAO = new medicamentosDAO();
                    $medicamentos = $medicamentosDAO->selecionaTds();
                    foreach ($medicamentos as $M) {
                        $idmedicamentos = $M["idmedicamentos"];
                        $nomeMedicamento = $M["nomeMedicamento"];
                        $quantidade = $M["quantidade"];
                        $status = $M["status"];
                        $nomeLocal = $M["nomeLocal"];
                        $endereco = $M["endereco"];
                        if ($status == 1) {
                            $status = "<b style='color: blue;'>Sim</b>";
                        }
                        if ($status == 2) {
                            $status = "<b style='color: blue;'>Não</b>";
                        }
                        ?>
                        <tr>
                            <td><b><?= $nomeMedicamento ?></b></td>
                            <td><?= $nomeLocal . "" . $endereco ?></td>
                            <td><?= $quantidade ?></td>
                            <td><?= $status ?></td>
                            <td>
                                <a href="editarMedicamento.php?idmedicamentos=<?= $idmedicamentos ?>" style="color: blue;text-decoration: none;font-size: 26px;"><i class="fa-sharp fa-solid fa-pencil" title="Editar"></i></a>
                                 &nbsp; &nbsp; &nbsp; &nbsp;
                                <a href="../CONTROLLER/medicamentoController.php?opc=excluir&idmedicamentos=<?= $idmedicamentos ?>" style="color: red;text-decoration: none;font-size: 26px;"><i class="fa-solid fa-trash" title="Excluir"></i></a>
                                 &nbsp; &nbsp; &nbsp; &nbsp;
                                 <a href="localizacaoMedicamento.php?idmedicamentos=<?= $idmedicamentos ?>&opc=medicamento" style="color: green;text-decoration: none;font-size: 26px;"><i class="fa-solid fa-map-location-dot" title="Localização"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>

            <div class="modal" id="modal">
                <div class="modal-content">
                    <header class="modal-header">
                        <h2>Novo medicamento</h2>
                    </header>
                    <form class="modal-form" action="../CONTROLLER/medicamentoController.php" method="post">
                        <input type="hidden" name="opc" value="cadastrar">
                        <input type="text" class="modal-field" placeholder="Nome do medicamento" name="nomeMedicamento">
                        <input type="text" class="modal-field" placeholder="Quantidade" name="quantidade">
                        <select name="idtipoMedicamento" class="modal-field">
                            <option>Tipo de Medicamento</option>
                            <?php
                            require_once '../DAO/tipomedicamentoDAO.php';
                            $tipomedicamentoDAO = new tipomedicamentoDAO();
                            $todosTipos = $tipomedicamentoDAO->selecionaTds();

                            foreach ($todosTipos as $TT) {
                                $idtipoMedicamento = $TT['idtipoMedicamento'];
                                $descricao = $TT['descricao'];
                                echo "<option value='$idtipoMedicamento'>$descricao</option>";
                            }
                            ?>
                        </select>
                        <select name="idlocalizacao" class="modal-field">
                            <option>Localização</option>
                            <?php
                            require_once '../DAO/localizacaoDAO.php';
                            $localizacaoDAO = new localizacaoDAO();
                            $localizacao = $localizacaoDAO->selecionaTds();

                            foreach ($localizacao as $TT) {
                                $idlocalizacao = $TT['idlocalizacao'];
                                $nomeLocal = $TT['nomeLocal'];
                                echo "<option value='$idlocalizacao'>$nomeLocal</option>";
                            }
                            ?>
                        </select>
                        <footer class="modal-footer">
                            <a href="ADMmedicacoes.php" style="text-decoration: none;font-size: 26px;"><i class="fa-solid fa-arrow-left" title="Voltar"></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="button green">Salvar</button>
                            <button class="button blue">Cancelar</button>
                        </footer>
                    </form>
                </div>
            </div>

            <div class="modal" id="modal2">
                <div class="modal-content">
                    <header class="modal-header">
                        <h2>Tipo medicamento</h2>
                        <span class="modal-close" id="modalClose2">&#10006;</span>
                    </header>
                    <form class="modal-form" action="../CONTROLLER/tipoMedicamentoController.php" method="post">
                        <input type="text" name="descricao" class="modal-field" placeholder="Digite o Tipo de Medicamento" >
                        <footer class="modal-footer">
                            <button class="button green">Salvar</button>
                            <button class="button blue">Cancelar</button>
                        </footer>
                    </form>
                </div>
            </div>
        </main>

        <script>
            // Selecting the sidebar and buttons
            const sidebar = document.querySelector(".sidebar");
            const sidebarOpenBtn = document.querySelector("#sidebar-open");
            const sidebarCloseBtn = document.querySelector("#sidebar-close");
            const sidebarLockBtn = document.querySelector("#lock-icon");

            // Function to toggle the lock state of the sidebar
            const toggleLock = () => {
                sidebar.classList.toggle("locked");
                // If the sidebar is not locked
                if (!sidebar.classList.contains("locked")) {
                    sidebar.classList.add("hoverable");
                    sidebarLockBtn.classList.replace("bx-lock-alt", "bx-lock-open-alt");
                } else {
                    sidebar.classList.remove("hoverable");
                    sidebarLockBtn.classList.replace("bx-lock-open-alt", "bx-lock-alt");
                }
            };

            // Function to hide the sidebar when the mouse leaves
            const hideSidebar = () => {
                if (sidebar.classList.contains("hoverable")) {
                    sidebar.classList.add("close");
                }
            };

            // Function to show the sidebar when the mouse enter
            const showSidebar = () => {
                if (sidebar.classList.contains("hoverable")) {
                    sidebar.classList.remove("close");
                }
            };

            // Function to show and hide the sidebar
            const toggleSidebar = () => {
                sidebar.classList.toggle("close");
            };

            // If the window width is less than 800px, close the sidebar and remove hoverability and lock
            if (window.innerWidth < 800) {
                sidebar.classList.add("close");
                sidebar.classList.remove("locked");
                sidebar.classList.remove("hoverable");
            }

            // Adding event listeners to buttons and sidebar for the corresponding actions
            sidebarLockBtn.addEventListener("click", toggleLock);
            sidebar.addEventListener("mouseleave", hideSidebar);
            sidebar.addEventListener("mouseenter", showSidebar);
            sidebarOpenBtn.addEventListener("click", toggleSidebar);
            sidebarCloseBtn.addEventListener("click", toggleSidebar);
        </script>
        <script>
            'use strict'

            const openModal = () => document.getElementById('modal')
                        .classList.add('active')

            const closeModal = () => document.getElementById('modal')
                        .classList.remove('active')

            const openModal2 = () => document.getElementById('modal2')
                        .classList.add('active')

            const closeModal2 = () => document.getElementById('modal2')
                        .classList.remove('active')

            document.getElementById('cadastrarMedicamento')
                    .addEventListener('click', openModal)

            document.getElementById('cadastrarTipoMedicamento')
                    .addEventListener('click', openModal2)

            document.getElementById('modalClose')
                    .addEventListener('click', closeModal)

            document.getElementById('modalClose2')
                    .addEventListener('click', closeModal2)
        </script>
    </body>
</html>