<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="shortcut icon" href="../IMAGENS/4 (1).png" type="image/x-icon">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/button.css">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="script.js" defer></script>
   <title>Agendamento vacinas Administradores</title>
    <link rel="stylesheet" href="css/records.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="main.js" defer></script>
    <style>
        .button{
    border-style: none;
    height: 40px;
    padding: 6px 12px;
    background-color: rgb(255, 255, 255);
    color: white;
    font-size: 1rem;
    cursor: pointer;
    transition: box-shadow .6s ease;
}

.button.blue{
    background-color: #1FB6FF;
}

button.green{
    background-color: #13CE66;
}

button.red{
    background-color: #FF4949;
}

.button:hover{
    box-shadow: inset 200px 0 0 #00000055;
}

@media(max-width:480px){
    .button.mobile{
        color:transparent;
        font-size:0;
        width:50px;
        height:50px;
        border-radius: 50%;
        position:fixed;
        top: 90vh;
        left: 80vw;
    }
    .button.mobile::before{
        content: "+";
        color:black;
        font-size:2rem;
        width:100%;
        height:100%;
    }
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

:root{
    --primary-color: #2640d6;
    --secundary-color: #FFF1CC;
    --shadow-color: #CCC;
    --text-color: #FFF;
}

body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    font-family: 'karla', sans-serif;
    position:relative;
}

header{
    background-color: var(--primary-color);
    height: 70px;
    text-align: center;
    line-height: 70px;
    box-shadow: 0 1px 2px var(--shadow-color);
}

.header-title{
    color: rgb(255, 255, 255);
    font-size: 2rem;
}

main{
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 90%;
    margin: 5vh auto;
    padding: 50px;
    box-shadow: 2px 2px 10px var(--shadow-color);
    gap: 20px;
}

footer{
    width:100;
    text-align: center;
    font-weight: 200;
    font-style: italic;
    padding: 20px;
}

@media (max-width:480px){
    header{
        position:fixed;
        width:100%;
    }
    .header-title{
        font-size: 1.5rem;
    }

    main{
        padding: 0;
        margin: 20px 0 0 0;
        width:100%;
        box-shadow: none;
    }
}
.modal{
    position: fixed;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    background: #ffffff;
    opacity: 0;
    z-index: -1;
}

.modal.active{
    opacity: 1;
    z-index: 1;
}

.modal-content{
    display: flex;
    flex-direction: column;
    gap:20px;
    width: 50vw;
    margin: 15vh auto;
    padding-bottom: 20px;
    background-color: white;
    box-shadow: 1px 1px 10px black;
}

.modal-header{
    display: flex;
    position: relative;
    justify-content: center;
    height: 40px;
    line-height: 40px;
    font-size: 1rem;
}



.modal-close{
    position: absolute;
    right: 0;
    display: block;
    width: 40px;
    height: 40px;
    text-align: center;
    user-select: none;
    cursor: pointer;
}

.modal-close:hover{
    background-color: #FF4949;
    color: white;
}

.modal-form{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    padding: 0 20px;
}

.modal-field{
    width: calc(50% - 10px);
    height: 40px;
    outline-style: none;
    border-style: none;
    box-shadow: 0 0 2px black;
    padding: 0 10px;
    font-size:1rem;
}

.modal-field:focus{
    border: 2px solid var(--primary-color);
    box-shadow: 0 0 3px var(--primary-color);
}


.modal-footer{
    background-color: inherit;
    text-align: right;
    padding: 0 20px;
}

@media (max-width:480px){
    .modal{
        top:100%;
        transition: all 1s ease;
    }
    .modal.active{
        top:0;
    }
    .modal-content{
        margin:0;
        width:100%;
        position:fixed;
    }
    .modal-field{
        width:100%;
    }
}
.records{
    width: 100%;
    user-select: none;
    text-align: left;
}

.records th{
    height: 50px;
    background-color: rgb(9, 1, 121);
    padding-left: 20px;
    font-size: 1.2rem;    
}
.records td{
    height: 50px;
    padding-left: 20px;
}

.records th:last-child,
.records td:last-child{
    padding: 0;
    min-width: 140px;
    text-align: center;
}

.records tr:hover{
    background-color: var(--secundary-color);
}

@media(max-width:480px){
    .records{
        border-spacing: 5px;
    }
    .records thead{
        display:none;
    }
    .records tr{
        box-shadow: 0 1px 3px var(--shadow-color);
    }
    .records td:not(:first-child){
        display:flex;
        justify-content: space-between;
        padding: 0 20px;
    }

    .records td{
        margin:10px 0;
           }

    .records tr:hover{
        background-color: white;
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
  background: #eef5fe;
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
              <a href="ADMajuda.php" class="link flex">
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
          <span class="name">pharma digital</span>
          <span class="email">Pharmadigital2023@gmail.com</span>
        </div>
      </div>
    </div>
  </nav>

    <header>
        <h1 class="header-title">Verificação de Agendamento</h1>
    </header>
    <main>
         <table class="records">
            <thead>
                <tr color="white" ></tr>
                    <th>Nome</th>
                    <th>Vacina</th>
                    <th>Localização</th>
                    <th>dia</th>
                    <th>hora</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Geovanna Soares</td>
                    <td>Hepatite A</td>
                    <td>Ubs 10</td>
                    <td>31/8</td>
                    <td>
                       18:00 </td>
                </tr>
                <tr>
                    <td>João Pedro</td>
                    <td>Pfizer
                    </td>
                    <td>Posto de saude 2</td>
                    <td>3/7</td>
                    <td>
                       13:00 </td>
                </tr>
                <tr>
                    <td>Jose da Silva</td>
                    <td>Febre Amarela</td>
                    <td>Posto de saude 8</td>
                    <td>15/7</td>
                    <td>
                      9:00  </td>
                </tr>
            </tbody>
        </table>
        <div class="modal" id="modal">
            <div class="modal-content">
                <header class="modal-header">
                    <h2>Novo Cliente</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <form class="modal-form">
                    <input type="text" class="modal-field" placeholder="Nome do medicamento">
                    <input type="email" class="modal-field" placeholder="localização">
                    <input type="text" class="modal-field" placeholder="Quantidade">
                    <input type="text" class="modal-field" placeholder="disponivel">
                </form>
                <footer class="modal-footer">
                    <button class="button green">Salvar</button>
                    <button class="button blue">Cancelar</button>
                </footer>
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

document.getElementById('cadastrarCliente')
    .addEventListener('click', openModal)

document.getElementById('modalClose')
    .addEventListener('click', closeModal)
    </script>
</body>
</html>