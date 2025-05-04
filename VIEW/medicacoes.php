<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <link rel="shortcut icon" href="../IMAGENS/4 (1).png" type="image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <script src="script.js" 
        <script src="../JS/menu.js" defer></script>

            <title>TODO supply a title</title>
            <meta charset="UTF-8">
            <link rel="" href="medicações.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
#searchbar{
     margin-left: 15%;
     padding:15px;
     border-radius: 10px;
   }
 
   input[type=text] {
      width: 30%;
      -webkit-transition: width 0.15s ease-in-out;
      transition: width 0.15s ease-in-out;
   }
 
   /* When the input field gets focus,
        change its width to 100% */
   input[type=text]:focus {
     width: 70%;
   }
 
  #list{
    font-size:  1.5em;
    margin-left: 90px;
   }
 
.animals{
   display: list-item;    
  } 


             
                .button-value {
                    border: 2px solid #6759ff;
                    padding: 1em 2.2em;
                    border-radius: 3em;
                    background-color: transparent;
                    color: #6759ff;
                    cursor: pointer;
                }
                .active {
                    background-color: #6759ff;
                    color: #ffffff;
                }
                :root{
                    --color-neutral-0: #0e0c0c;
                    --color-neutral-10: #171717;
                    --color-neutral-30: #a8a29e;
                    --color-neutral-40: #f5f5f5;
                }
                *{
                    font-family: 'Chivo Mono', monospace;
                    font-family: 'Pathway Extreme', sans-serif;
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    outline: none;
                    border: none;
                    text-decoration: none;
                    text-decoration: .2s linear;
                }
               
                .container{
                    background: rgba(255, 255, 255, 0.959);
                    padding: 15px 9%;
                    padding-bottom: 100%;
                }
                .container .heading{
                    text-align: center;
                    padding-bottom: 15px;
                    color: rgb(44, 44, 131);

                    font-size: 50px;
                }
                .container .box-container{
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
                    gap: 15px;
                }
                .container .box-container .box{
                    box-shadow:  0 5px 3px  black;
                    border-radius: 5px;
                    background: white;
                    text-align: center;
                    padding: 30PX 20PX;

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
                                <span class="title">Setting</span>
                                <span class="line"></span>
                            </div>
                            <li class="item">
                                <a href="informacoes.php" class="link flex">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <span>Informações</span>
                                </a>
                            </li>

<!--                            <li class="item">
                                <a href="login.php" class="link flex">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    <span>Login</span>
                                </a>
                            </li>-->
                        </ul>
                    </div>

                    <div class="sidebar_profile flex">
                        <span class="nav_image">
                            <img src="../IMAGENS/4 (1).png" alt="logo_img" />
                        </span>
                        <div class="data_text">
                             </div>
                    </div>
                </div>
            </nav>



            <!-- Navbar -->






            <input id="searchbar" onkeyup="search_medicacoes()" type="text"
                   neme="search" placeholder="search medicamentos"><!-- comment -->
                <div id="buttons">
                    <a href="medicações.html"><button class="button-value">Todos.</button> </a>
                    <A href="medicamentos10.html" > <button class="button-value" >UBS 10</button></a>
                    <button class="button-value" >UBS 8</button>
                    <a href="medicações2.html">  <button class="button-value"  > UBS 2</button></a>
                </div>
                <br>
                <br>
                <div class="container">
                    <h1 class="heading">Medicações</h1>
                    <ol id='list'>

                    <div class="box-container">
                        <div class="box">
                            <li class="medicacoes">  <img src="../IMAGENS/soroFisiologigo.jpg" alt="Amoxilina" width="300px" height="300px">
                            <h3>Soro Fisiologico</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                        </li>
                        <li class="animals">
                        <div class="box">
                            <img src="../IMAGENS/anlodopino.jpg" alt="" width="300px" height="300px">
                            <h3>Andopilho</h3>

                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                    </li>
                        <li class="animals">
                        <div class="box">
                            <img src="../IMAGENS/aas.jpg" alt=""width="300px" height="300px">
                            <h3>ASS Infantil</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                    </li>
                        <li class="animals">
                        <div class="box">
                            <img src="../IMAGENS/AZITROMICINA.jpg" alt=""width="200px" height="300px">
                            <h3>Azitromicina</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                    </li>
                        <li class="animals">
                        <div class="box">
                            <img src="../IMAGENS/captopril.jpg" alt="" width="300px" height="300px">
                            <h3>captoplil</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                        </li>
                        <li class="animals">
                        <div class="box">
                            <img src="../IMAGENS/DEXAMETASONA.jpg" alt="" width="300px" height="300px">
                            <h3>dexametasona</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                    </li>
                        <li class="animals">
                        <div class="box">
                            <img src="../IMAGENS/HIDROCOLOR.jpg" alt=""width="200px" height="300px">
                            <h3>hidrocolotiazida</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div></li>
                        <li class="animals">
                        <div class="box">
                            <img src="../IMAGENS/Losartana.jpg" alt="" width="300px" height="300px">
                            <h3>Losartana</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                    </li>
                        <li class="animals">
                        <div class="box">
                            <img src="../IMAGENS/omeprazol.jpg" alt="" width="300px" height="300px">
                            <h3>Omeprazol</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                    </li>
                      <li class="animals">  <div class="box">
                            <img src="../IMAGENS/paracetamol.jpg" alt="" width="300px" height="300px">
                            <h3>Paracetamol</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                        </div>
                      </li>
                      <li class="animals">  <div class="box">
                            <img src="../IMAGENS/dipirona.jpg" alt="" width="300PX" height="300PX">
                            <h3>Dipirona</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                          </div></li>
                        <li class="animals">  <div class="box">
                            <img src="../IMAGENS/iodeto.jpg" alt="" width="300px" height="300px">
                            <h3>Xarope iodeto de potassio</h3>
                            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
                            <a href="agendamentoMedica.php">Agendamento para retirada do medicamento</a>
                            <br>
                            </div></li>
                       
                </div>
                    </ol>
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
                                <script>
               function search_animal() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('animals');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}
</script>
        </body>
    </html>