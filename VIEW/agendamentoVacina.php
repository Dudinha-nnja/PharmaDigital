<?php
session_start();
// Inicia a sessão (se já não estiver iniciada)
// Verifica se o usuário não está logado

$usuario = $_SESSION["usuario"];
$idusuario = $_SESSION["idusuario"];
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php"); // Redireciona para a página de login
    exit();
}
//var_dump($idusuario);die;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="shortcut icon" href="../IMAGENS/4 (1).png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SideBar</title>
        <link rel="stylesheet" href="style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <script src="script.js" defer></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <style>
            h1
            {
                color:#000655;
                margin:40px 0 60px 0;
                font-weight:300;
            }



            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Outfit', sans-serif;
            }

            body{
                height: 100vh;
                background-image: url(../IMAGENS/pexels-pixabay-45842.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            :root{
                --bg-body: #131416;
                --color-font: #ffff;
                --color-button:#0772EB;
                --color-card: #1E212C;
            }

            .container{
                max-width: 830px;
                margin: auto;
            }

            body{
                margin: 0;
                padding: 0;
                font-family: 'Inter', sans-serif;
            }

            header .logo{
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 35px;
            }

            .logo h2{
                color: var(--color-font);
            }

            .logo img{
                width: 45px;
                height: 45px;
                margin-right: 5px;
            }

            .section-1{
                display: flex;
                margin-top: 100px;
            }

            .action-title h2{
                font-size: 80px;
                color: rgb(255, 255, 255);
            }

            .button{
                background-color: var(--color-button);
                display: inline-block;
                padding: 15px 70px;
                border-radius: 50px;
                color: var(--color-font);
                font-size: 20px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }

            .ebook img{
                width: 530px;
                height: auto;
                margin-right: 50px;
            }

            .section-2{

                display: flex;
                flex-direction: column;
                justify-content: center;
                margin-bottom: 50px;
                margin-top: 180px;
            }

            .section-2 h2{
                color:black;
                text-transform: uppercase;
                text-align: center;
            }
            .section-3{
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                margin-top: 200px;
                margin-bottom: 50px;
            }

            .button-2{
                display: inline-block;
                background-color: #1E212C;
                color: var(--color-font);
                padding: 15px 30px;
                border-radius: 50px;
                font-weight: bold;
            }

            .section-3 h2{
                font-size: 48px;
                color: #0772EB;
            }

            .section-3 p{
                color: var(--color-font);
                margin-top: -25px;
            }

            footer{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background-color: #1C2029;
                height: 100px;
                padding-bottom: 40px;
            }

            .button-footer{
                display: inline-block;
                padding: 15px 70px;
                background-color: var(--color-button);
                border-radius: 50px;
                color: var(--color-font);
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
                margin-top: -40px;
            }

            footer p{
                color: var(--color-font);
                font-size: 14px;
                margin-top: 30px;
            }

            @media (max-width: 420px){
                .section-1{
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                    padding: 10px;
                }

                .ebook img{
                    margin-right: 0px
                }

                .action-title{
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                    align-items: center;
                }



                .action-title h2{
                    font-size: 40px;
                    text-align: center;
                    font-size: 30px;
                    color: var(--color-font);
                }

                .button{
                    margin-top: 20px;
                }

                .cards{
                    display: flex;
                    flex-direction: column;
                }

                .card{
                    margin-top: 40px;
                }

                .section-3 h2{
                    text-align: center;
                    font-size: 30px;
                }

                .section-3 p{
                    font-size: 14px;
                }


            }
            /* Import Google font - Poppins */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }
            body {
                min-height: 100vh;

            }
            /* Pre css */
            .flex {
                display: flex;
                align-items: center;
            }
            .nav_image {
                display: flex;
                min-width: 55px;
                justify-content: center;
            }
            .nav_image img {
                height: 35px;
                width: 35px;
                border-radius: 50%;
                object-fit: cover;
            }

            /* Sidebar */
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 270px;
                background: #fff;
                padding: 15px 10px;
                box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
                transition: all 0.4s ease;
            }
            .sidebar.close {
                width: calc(55px + 20px);
            }
            .logo_items {
                gap: 8px;
            }
            .logo_name {
                font-size: 22px;
                color: #333;
                font-weight: 500px;
                transition: all 0.3s ease;
            }
            .sidebar.close .logo_name,
            .sidebar.close #lock-icon,
            .sidebar.close #sidebar-close {
                opacity: 0;
                pointer-events: none;
            }
            #lock-icon,
            #sidebar-close {
                padding: 10px;
                color: #4070f4;
                font-size: 25px;
                cursor: pointer;
                margin-left: -4px;
                transition: all 0.3s ease;
            }
            #sidebar-close {
                display: none;
                color: #333;
            }
            .menu_container {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                margin-top: 40px;
                overflow-y: auto;
                height: calc(100% - 82px);
            }
            .menu_container::-webkit-scrollbar {
                display: none;
            }
            .menu_title {
                position: relative;
                height: 50px;
                width: 55px;
            }
            .menu_title .title {
                margin-left: 15px;
                transition: all 0.3s ease;
            }
            .sidebar.close .title {
                opacity: 0;
            }
            .menu_title .line {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                height: 3px;
                width: 20px;
                border-radius: 25px;
                background: #aaa;
                transition: all 0.3s ease;
            }
            .menu_title .line {
                opacity: 0;
            }
            .sidebar.close .line {
                opacity: 1;
            }
            .item {
                list-style: none;
            }
            .link {
                text-decoration: none;
                border-radius: 8px;
                margin-bottom: 8px;
                color: #707070;
            }
            .link:hover {
                color: #fff;
                background-color: #4070f4;
            }
            .link span {
                white-space: nowrap;
            }
            .link i {
                height: 50px;
                min-width: 55px;
                display: flex;
                font-size: 22px;
                align-items: center;
                justify-content: center;
                border-radius: 4px;
            }

            .sidebar_profile {
                padding-top: 15px;
                margin-top: 15px;
                gap: 15px;
                border-top: 2px solid rgba(0, 0, 0, 0.1);
            }
            .sidebar_profile .name {
                font-size: 18px;
                color: #333;
            }
            .sidebar_profile .email {
                font-size: 15px;
                color: #333;
            }

            /* Navbar */
            .navbar {
                max-width: 500px;
                width: 100%;
                position: fixed;
                top: 0;
                left: 60%;
                transform: translateX(-50%);
                background: #fff;
                padding: 10px 20px;
                border-radius: 0 0 8px 8px;
                justify-content: space-between;
            }
            #sidebar-open {
                font-size: 30px;
                color: #333;
                cursor: pointer;
                margin-right: 20px;
                display: none;
            }
            .search_box {
                height: 46px;
                max-width: 500px;
                width: 100%;
                border: 1px solid #aaa;
                outline: none;
                border-radius: 8px;
                padding: 0 15px;
                font-size: 18px;
                color: #333;
            }
            .navbar img {
                height: 40px;
                width: 40px;
                margin-left: 20px;
            }

            /* Responsive */
            @media screen and (max-width: 1100px) {
                .navbar {
                    left: 65%;
                }
            }
            @media screen and (max-width: 800px) {
                .sidebar {
                    left: 0;
                    z-index: 1000;
                }
                .sidebar.close {
                    left: -100%;
                }
                #sidebar-close {
                    display: block;
                }
                #lock-icon {
                    display: none;
                }
                .navbar {
                    left: 0;
                    max-width: 100%;
                    transform: translateX(0%);
                }
                #sidebar-open {
                    display: block;
                }
            }
        </style>
        <style>

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Open Sans', sans-serif;
            }

            body {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0 10px;
                min-height: 100vh;
                background:#00405e;
            }

            form {
                padding: 25px;
                background: #fff;
                max-width: 500px;
                width: 100%;
                border-radius: 7px;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.05);
            }

            form h2 {
                font-size: 27px;
                text-align: center;
                margin: 0px 0 30px;
            }

            form .form-group {
                margin-bottom: 15px;
                position: relative;
            }

            form label {
                display: block;
                font-size: 15px;
                margin-bottom: 7px;
            }

            form input,
            form select {
                height: 45px;
                padding: 10px;
                width: 100%;
                font-size: 15px;
                outline: none;
                background: #fff;
                border-radius: 3px;
                border: 1px solid #bfbfbf;
            }

            form input:focus,
            form select:focus {
                border-color: #9a9a9a;
            }

            form input.error,
            form select.error {
                border-color: #f91919;
                background: #f9f0f1;
            }

            form small {
                font-size: 14px;
                margin-top: 5px;
                display: block;
                color: #f91919;
            }

            form .password i {
                position: absolute;
                right: 0px;
                height: 45px;
                top: 28px;
                font-size: 13px;
                line-height: 45px;
                width: 45px;
                cursor: pointer;
                color: #939393;
                text-align: center;
            }

            .submit-btn {
                margin-top: 30px;
            }

            .submit-btn input {
                color: white;
                border: none;
                height: auto;
                font-size: 16px;
                padding: 13px 0;
                border-radius: 5px;
                cursor: pointer;
                font-weight: 500;
                text-align: center;
                background: #00405e;
                transition: 0.2s ease;
            }

            .submit-btn input:hover {
                background:#00405e;
            }
        </style>
    </head>
    <body>
        <nav class="sidebar locked">
            <div class="logo_items flex">
                <span class="nav_image">
                    <img src="../IMAGENS/4 (1).png" alt="logo_img" />
                </span>
                <span class="logo_name">Pharma Digital</span>
                <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
                <i class="bx bx-x" id="sidebar-close"></i>
            </div>

            <div class="menu_container">
                <div class="menu_items">
                    <ul class="menu_item">

                        <li class="item">
                            <a href="../index.php  " class="link flex">
                                <i class="fa-solid fa-house"></i>
                                <span>Pagina inicial</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="mapas.html" class="link flex">
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
                            <a href="medicacoes.php" class="link flex">
                                <i class="fa-sharp fa-solid fa-pills"></i>
                                <span>Medicações</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="vacinas.php" class="link flex">
                                <i class="fa-solid fa-syringe"></i>
                                <span>Vacinações</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="agendamentogeral.php" class="link flex">
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
                            <a href="informacoes.php" class="link flex">
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
                    </ul>
                </div>

                <div class="sidebar_profile flex">
                    <span class="nav_image">
                        <img src="../IMAGENS/4 (1).png" alt="logo_img" />
                    </span>
                    <div class="data_text">
                        <span class="name">David Oliva</span>
                        <span class="email">david@gmail.com</span>
                    </div>
                </div>
            </div>
        </nav>
        <form action="../CONTROLLER/agendamentoController.php" method="post">
            <h2>Formulário de Agendamento de Vacinações</h2>
            <div class="form-group fullname">
                <label for="fullname">Nome</label>
                <input type="hidden" name="opc" value="cadastrar">
                <input type="hidden" name="vacina" value="vacina">
                <input type="hidden" name="quantidadeSolicitada" value="1">
                <input type="hidden" id="fullname" placeholder="Seu nome" name="idusuario" value="<?= $idusuario ?>">
                <input type="text" id="fullname" placeholder="Seu nome" value="<?= $usuario ?>" readonly="">
            </div>
            <div class="form-group date">
                <label for="date">Agendamento</label>
                <input type="date" name="data" required="">
            </div>
            <div class="form-group gender">
                <label for="gender">Medicações</label>
                <select name="idmedicamentos">
                    <option>Tipo de Medicamento</option>
                    <?php
                    require_once '../DAO/medicamentosDAO.php';
                    $medicamentosDAO = new medicamentosDAO();
                    $todosTipos = $medicamentosDAO->selecionaTdsVacinas();

                    foreach ($todosTipos as $TT) {
                        $idmedicamentos = $TT['idmedicamentos'];
                        $nomeMedicamento = $TT['nomeMedicamento'];
                        $quantidade = $TT['quantidade'];
                        echo "<option value='$idmedicamentos'>".$nomeMedicamento . " | " .  $quantidade  . " Quantidades </option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group submit-btn">
                <input type="submit" value="Agendar">
            </div>
        </form>
        <!---->
        <script >
            // Selecting form and input elements
            const form = document.querySelector("form");
            const passToggleBtn = document.getElementById("pass-toggle-btn");

            // Function to display error messages
            const showError = (field, errorText) => {
                field.classList.add("error");
                const errorElement = document.createElement("small");
                errorElement.classList.add("error-text");
                errorElement.innerText = errorText;
                field.closest(".form-group").appendChild(errorElement);
            }

            // Function to handle form submission
            const handleFormData = (e) => {
                e.preventDefault();

                // Retrieving input elements
                const fullnameInput = document.getElementById("nome");
                const dateInput = document.getElementById("date");
                const genderInput = document.getElementById("posto");

                // Getting trimmed values from input fields
                const nome = fullnameInput.value.trim();
                const date = dateInput.value;
                const posto = postoInput.value;
                const Medicações = postoInput.value;

                // Regular expression pattern for email validation
                const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

                // Clearing previous error messages
                document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
                document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

                // Performing validation checks
                if (fullname === "") {
                    showError(fullnameInput, "Enter your full name");
                }
                if (!emailPattern.test(email)) {
                    showError(emailInput, "Enter a valid email address");
                }
                if (password === "") {
                    showError(passwordInput, "Enter your password");
                }
                if (date === "") {
                    showError(dateInput, "Select your date of birth");
                }
                if (gender === "") {
                    showError(genderInput, "Select your posto");
                }

                // Checking for any remaining errors before form submission
                const errorInputs = document.querySelectorAll(".form-group .error");
                if (errorInputs.length > 0)
                    return;

                // Submitting the form
                form.submit();
            }

            // Toggling password visibility
            passToggleBtn.addEventListener('click', () => {
                passToggleBtn.className = passwordInput.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
                passwordInput.type = passwordInput.type === "password" ? "text" : "password";
            });

            // Handling form submission event
            form.addEventListener("submit", handleFormData);
        </script>







    </body>
</html>
