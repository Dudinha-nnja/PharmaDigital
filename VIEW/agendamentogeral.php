<!DOCTYPE html>
<?php
session_start();
// Inicia a sessão (se já não estiver iniciada)
// Verifica se o usuário não está logado
//var_dump($_SESSION);
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php"); // Redireciona para a página de login
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pharma Digital</title>
        <link rel="stylesheet" href="style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <script src="script.js" defer></script>
        <link rel="shortcut icon" href="../IMAGENS/4 (1).png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../CSS/menu.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <style>
            h1{
                color:#000000;
                margin:40px 0 60px 0;
                font-weight:300;
            }
            .our-team-main{
                width:100%;
                height:auto;
                border-bottom:5px #323233 solid;
                background:#fff;
                text-align:center;
                border-radius:10px;
                overflow:hidden;
                position:relative;
                transition:0.5s;
                margin-bottom:28px;
            }
            .our-team-main img{
                border-radius:50%;
                margin-bottom:20px;
                width: 90px;
            }
            .our-team-main h3{
                font-size:20px;
                font-weight:700;
            }

            .our-team-main p{
                margin-bottom:0;
            }
            .team-back{
                width:100%;
                height:auto;
                position:absolute;
                top:0;
                left:0;
                padding:5px 15px 0 15px;
                text-align:left;
                background:#fff;

            }

            .team-front {
                width:100%;
                height:auto;
                position:relative;
                z-index:10;
                background:#fff;
                padding:15px;
                bottom:0px;
                transition: all 0.5s ease;
            }

            .our-team-main:hover .team-front {
                bottom:-200px;
                transition: all 0.5s ease;
            }

            .our-team-main:hover
            {
                border-color:#777;
                transition:0.5s;
            }

            /*our-team-main*/
            .container {
                width: 100%;
                display: flex;
                justify-content: space-evenly;
                flex-wrap: wrap;
            }

            /* Card */
            .card {
                width: 300px;
                height: 460px;
                margin: 25px;
                background-color: #a200ff;
                border-radius: 20px;
                overflow: hidden;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.7);
                transition: 0.3s;
            }

            /* Card Header*/
            .card-header {
                width: 100%;
                height: 200px;
                background-color: #03014b;
                overflow: hidden;
            }

            .card-img {
                margin-top: 20px;
                margin-left: 50px;
            }

            /* Card Body */
            .card-body {
                height: 170px;
                padding: 15px;
                text-align: center;
                font-family: sans-serif;
            }

            .card-local {
                font-size: 16px;
                margin: 10px 0;
            }

            .card-titulo {
                font-size: 32px;
                margin: 15px 0;
            }

            .card-texto {
                font-size: 12px;
                width: 250px;
                margin: 0 auto;
            }

            /* Card Footer */
            .card-footer {
                margin-top: 10px;
                text-align: center;
                background-color: #000;
            }

            .card-footer a {
                color: #fff;
                display: block;
                padding: 16px;
                text-decoration: none;
                font-family: sans-serif;
                font-weight: 600;
            }

            /* Cores Cards */
            .card-1 .card-footer {
                background-color: #2740d1;
            }

            .card-1 .card-local {
                color: #2740d1;
            }

            .card-2 .card-footer {
                background-color: #d12761;
            }

            .card-2 .card-local {
                color: #d12761;
            }

            .card-3 .card-footer {
                background-color: #00c702;
            }

            .card-3 .card-local {
                color: #00c702;
            }

            /* Animação Hover */
            .card:hover {
                transform: scale3d(1.1, 1.1, 1);
            }


            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Outfit', sans-serif;
            }

            body{
                height: 100vh;
                background-image: url(IMAGENS/mao.jpg);
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

            .myCard {
                background-color: transparent;
                width: 190px;
                height: 254px;
                perspective: 1000px;
            }

            .title {
                font-size: 1.5em;
                font-weight: 900;
                text-align: center;
                margin: 0;
            }

            .innerCard {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.8s;
                transform-style: preserve-3d;
                cursor: pointer;
            }

            .myCard:hover .innerCard {
                transform: rotateY(180deg);
            }

            .frontSide,
            .backSide {
                position: absolute;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-evenly;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border: 1px solid rgba(255, 255, 255, 0.8);
                border-radius: 1rem;
                color: white;
                box-shadow: 0 0 0.3em rgba(255, 255, 255, 0.5);
                font-weight: 700;
            }

            .frontSide,
            .frontSide::before {
                background: linear-gradient(43deg, rgb(62, 71, 116) 0%, rgb(36, 62, 119) 46%, rgb(26, 16, 168) 100%);
            }

            .backSide,
            .backSide::before {
                background-image: linear-gradient(160deg, #0c405e 0%, #07a08e 100%);
            }

            .backSide {
                transform: rotateY(180deg);
            }

            .frontSide::before,
            .backSide::before {
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                content: '';
                width: 110%;




                height: 110%;
                position: absolute;
                z-index: -1;
                border-radius: 1em;
                filter: blur(20px);
                animation: animate 5s linear infinite;
            }

            @keyframes animate {
                0% {
                    opacity: 0.3;
                }

                80% {
                    opacity: 1;
                }

                100% {
                    opacity: 0.3;
                }
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
                color: black;
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

            .cards{
                display: flex;
                justify-content: space-around;
                align-items: center;
                margin-top: 50px;
            }
            .card {
                --main-color: #000;
                --submain-color: #78858F;
                --bg-color: #fff;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                position: relative;
                width: 200px;
                height: 284px;
                display: flex;
                flex-direction: column;
                align-items: center;
                border-radius: 20px;
                background: var(--bg-color);
            }

            .card__img {
                height: 192px;
                width: 100%;
            }

            .card__img svg {
                height: 100%;
                border-radius: 20px 20px 0 0;
            }

            .card__avatar {
                position: absolute;
                width: 114px;
                height: 114px;
                background: rgb(77, 0, 177);
                border-radius: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                top: calc(50% - 57px);
            }

            .card__avatar svg {
                width: 100px;
                height: 100px;
            }

            .card__title {
                margin-top: 60px;
                font-weight: 500;
                font-size: 18px;
                color: black;
            }

            .card__subtitle {
                margin-top: 10px;
                font-weight: 400;
                font-size: 15px;
                color: var(--submain-color);
            }

            .card__btn {
                margin-top: 15px;
                width: 76px;
                height: 31px;
                border: 2px solid var(--main-color);
                border-radius: 4px;
                font-weight: 700;
                font-size: 11px;
                color: var(--main-color);
                background: var(--bg-color);
                text-transform: uppercase;
                transition: all 0.3s;
            }

            .card__btn-solid {
                background: var(--main-color);
                color: var(--bg-color);
            }

            .card__btn:hover {
                background: var(--main-color);
                color: var(--bg-color);
            }

            .card__btn-solid:hover {
                background: var(--bg-color);
                color: var(--main-color);
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
                            <a href="localizacao.php" class="link flex">
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
                            <span class="title">Mais</span>
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
                </div>

                <div class="sidebar_profile flex">
                    <span class="nav_image">
                     </span>
                    <div class="data_text">
                         </div>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
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
        <!--SECTION-1-->
        <br>
        <br>
        <br>
    <center>
        <section>
             <div class="home__container container grid">
                 <img src="../IMAGENS/Public health-bro.png" alt="" width="300px" >

                    <div class="home__data">
                        <h1 class="home__title">Seja bem-vindo á <br> área de serviços Pharma Digital!</h1>
                        <p class="home__description">Nossos principais serviços.</p>

                    

                    </div>   
                </div>
        </section>
    </center>
    <div class="container">
        <div class="card">
            <br>
            <br>
            <br>
            <p class="title"> Se desejar reservar Medicamento, clique aqui!</p>
            <div class="btns">
                <a href="agendamentoMedica.php" class="btn btn-success">Agendar</a>
            </div>

        </div>
        <div class="card">
            <br>
            <br>
            <br>
            <p class="title">Se desejar reservar Vacina, clique aqui!</p>
            <div class="btns">
                <a href="agendamentoVacina.php" class="btn btn-success">Agendar</a> 
            </div>
        </div>
        <div class="card">
            <br>
            <br>
            <br>
            <p class="title">Meus Agendamentos
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
             <div class="btns">
                 <a href="meusAgendamentos.php" class="btn btn-primary">Acessar</a> 
            </div>
            <br>
            <br>
            <br>
           
        </div>
    </div>

</body>
</html>