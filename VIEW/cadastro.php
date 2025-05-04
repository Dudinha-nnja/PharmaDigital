<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="../IMAGENS/4 (1).png" type="image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <script src="script.js" defer></script>

        <title>Cadastro</title>
        <style>
            html {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background: url(../IMAGENS/pexels-alex-green-5699514.jpg);
                height: 100vh;
                background-size: cover;
                background-position: center;

            }
            .cadastro-box {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 400px;
                padding: 40px;
                transform: translate(-50%, -50%);
                background: #fff;
                box-sizing: border-box;
                box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
                border-radius: 10px;
            }
            .cadastro-box h2 {
                margin: 0 0 30px;
                padding: 0;
                color: #000;
                text-align: center;

            }
            .cadastro-box .user-box {
                position: relative;
            }
            .cadastro-box .user-box input {
                width: 100%;
                padding: 10px 0;
                font-size: 16px;
                color: #ccffff;
                margin-bottom: 30px;
                border: none;
                border-bottom: 1px solid #808080;
                outline: none;
                background: transparent;
            }
            .cadastro-box .user-box label {
                position: absolute;
                top: 0;
                left: 0;
                padding: 10px 0;
                font-size: 16px;
                color: #fff;
                pointer-events: none;
                transition: .5s;
            }

            .cadastro-box .user-box input:focus~label,
            .cadastro-box .user-box input:valid~label {
                top: -20px;
                left: 0;
                color: #000;
                font-size: 15px;
            }
            .cadastro-box form a {
                position: relative;
                display: inline-block;
                padding: 10px 20px;
                color: #03e9f4;
                font-size: 16px;
                text-decoration: none;
                text-transform: uppercase;
                overflow: hidden;
                transition: .5s;
                margin-top: 40px;
                letter-spacing: 4px;
            }
            .cadastro-box a:hover {
                background: #03e9f4;
                color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
            }
            .cadastro-box a span {
                position: absolute;
                display: block;
            }
            .cadastro-box a span:nth-child(1) {
                top: 0;
                left: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, transparent, #03e9f4);
                animation: btn-anim1 1s linear infinite;
            }
            @keyframes btn-anim1 {
                0% {
                    left: -100%;
                }
                50%,
                100% {
                    left: 100%;
                }
            }
            .cadastro-box a span:nth-child(2) {
                top: -100%;
                right: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(180deg, transparent, #03e9f4);
                animation: btn-anim2 1s linear infinite;
                animation-delay: .25s
            }
            @keyframes btn-anim2 {
                0% {
                    top: -100%;
                }
                50%,
                100% {
                    top: 100%;
                }
            }
            .cadastro-box a span:nth-child(3) {
                bottom: 0;
                right: -100%;
                width: 100%;
                height: 2px;
                background: linear-gradient(270deg, transparent, #03e9f4);
                animation: btn-anim3 1s linear infinite;
                animation-delay: .5s
            }
            @keyframes btn-anim3 {
                0% {
                    right: -100%;
                }
                50%,
                100% {
                    right: 100%;
                }
            }
            .cadastro-box a span:nth-child(4) {
                bottom: -100%;
                left: 0;
                width: 2px;
                height: 100%;
                background: linear-gradient(360deg, transparent, #03e9f4);
                animation: btn-anim4 1s linear infinite;
                animation-delay: .75s
            }

            @keyframes btn-anim4 {
                0% {
                    bottom: -100%;
                }
                50%,
                100% {
                    bottom: 100%;
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
                    <img src="IMAGENS/4.jpg" alt="logo_img" />
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

                        <li class="item">
                            <a href="login.php" class="link flex">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <span>Login</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar_profile flex">
                    <span class="nav_image">
                        <img src="images/profile.jpg" alt="logo_img" />
                    </span>
                    <div class="data_text">
                        <span class="name">David Oliva</span>
                        <span class="email">david@gmail.com</span>
                    </div>
                </div>
            </div>
        </nav>
        <div class="cadastro-box" style="color: black;font-weight: bold;">
            <h2>Cadastro</h2>
            <form action="../CONTROLLER/cadastraUsuarioController.php" method="post">
                <input type="hidden" value="2" name="idperfil">
                <div class="user-box" style="color: black;font-weight: bold;">
                    <input type="text" style="color: black" name="usuario" required="" placeholder="Usuario">
                </div>
                <div class="user-box">
                    <input type="password" style="color: black" name="senha" required="" placeholder="Senha">
                </div>
                <div class="user-box">
                    <input type="email" style="color: black" name="email" required=""placeholder="Seu email">
                </div>
                <div>
                    Masculino <input type="radio" name="genero" required="" value="1">
                    Feminino <input type="radio" name="genero" required="" value="2">
                </div>
                <center>
                    <a>
                        <button type="submit">Finalizar Cadastro</button>
                    </a>
                </center>
            </form>
        </div>
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
            sidebarCloseBtn.addEventListener("click", toggleSidebar);</script>

    </body>

</html>