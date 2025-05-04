<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="script.js" defer></script>
 
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link rel="" href="medicações.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <style>
         
.wrapper {
    width: 95%;
    margin: 0 auto;
  }
  #search-container {
    margin: 1em 0;
  }
  #search-container input {
    background-color: transparent;
    width: 40%;
    border-bottom: 2px solid #110f29;
    padding: 1em 0.3em;
  }
  #search-container input:focus {
    border-bottom-color: #6759ff;
  }
  #search-container button {
    padding: 1em 2em;
    margin-left: 1em;
    background-color: #6759ff;
    color: #ffffff;
    border-radius: 5px;
    margin-top: 0.5em;
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
margin: 0; padding: 0;
box-sizing: border-box;
outline: none; border: none;
text-decoration: none;
text-decoration: .2s linear;
    }
    header{
        width: 100%;
        background-color: rgba(43, 76, 150, 0.829);
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
    }
    .logo-imagem{
        width: 50px;
        height: 50px;
        background-color: rgb(0, 0, 0);
        border-radius: 25px;
    }
    .container-logo{
        display: flex;
        align-items: right;
    }
    .logo-texto{
        margin-left: 10px;
        color:rgb(255, 255, 255)
    }
    .menu li{
        display: inline-block;
        margin: 0 10px;
    }
    .menu li a{
        font-size: 20px;
        text-decoration: none;
        color: rgb(255, 254, 254);
        text-transform: uppercase;
        border-radius: 15px;
    }
    .menu li a:hover{
    background-color: rgb(85, 90, 94);}
    

    .search-box{
        position: absolute;
        top: 15%;
        left: 12%;
        transform: translate(-50%, -50%);
        background: rgb(28, 28, 126);
        height: 40px;
        border-radius: 40px;
        padding: 10px;
    }
    .search-btn{
        color: rgb(54, 54, 110);
        float: right;
        width: 40px;
        height: 30px;
        border-radius: 50%;
        background: rgb(255, 253, 253);
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 2s;
    }
    .search-txt{
        border: none;
        background: none;
        outline: none;
        float: right;
        padding: 0;
        color: white;
        font-size: 16px;
        transition: 0.4s;
        line-height: 40px;
        width: 0px;
    }
    .search-box:hover > .search-txt{
        width: 240px;
        padding: 0 6px;
    }
    .search-box:hover > .search-btn{
        background: white;
    
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
<link rel="shortcut icon" href="../IMAGENS/4 (1).png" type="image/x-icon">

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
          
<!--          <li class="item">
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
          <span class="name">David Oliva</span>
          <span class="email">david@gmail.com</span>
        </div>
      </div>
    </div>
  </nav>

      
      <!-- Navbar -->
        
        
        
        
        
        
        <div class="wrapper">
        <div id="search-container">
          <input
            type="search"
            id="search-input"
            placeholder="Coloque o nome da vacina aqui."
          />
          <button id="search">Pesquisar</button>
        </div>
        <div id="buttons">
            <a href="medicações.html"><button class="button-value">Todos.</button> </a>
            <A href="medicamentos10.html" > <button class="button-value" >UBS 10</button></a>
          <button class="button-value" >UBS 8</button>
          <a href="medicações2.html">  <button class="button-value"  > UBS 2</button></a>
        </div>
    <br>
    <br>
 <div class="container">
    <h1 class="heading">Vacinações</h1>
    <div class="box-container">
        <div class="box">
            <img src="../IMAGENS/antitetanica.jpg" alt="Amoxilina" width="300px" height="300px">
            <h3>Vacina Antitetanica</h3>
            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
            <a href="agendamentoVacina.php">Agendamento para retirada do medicamento</a>
               <br>
          </div>
        <div class="box">
            <img src="../IMAGENS/covid.jpg" alt="" width="300px" height="300px">
            <h3>Vacina Covid-19</h3>
          
            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
            <a href="agendamentoVacina.php">Agendamento para retirada do medicamento</a>
               <br>
        </div>
        <div class="box">
            <img src="../IMAGENS/bcg.jpg" alt=""width="300px" height="300px">
            <h3>Vacina BCG</h3>
            <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
            <a href="agendamentoVacina.php">Agendamento para retirada do medicamento</a>
               <br>
        </div>
        <div class="box">
            <img src="../IMAGENS/h1n1.jpg" alt=""width="200px" height="300px">
          <h3>Vacina H1N1</h3>
         <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
         <a href="agendamentoVacina.php">Agendamento para retirada do medicamento</a>
               <br>
      </div>
<!--      <div class="box">
          <img src="../imagens/CAPTOPRIL.jpg" alt="" width="300px" height="300px">
        <h3>captoplil</h3>
        <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
               <a href="agendamentoVacina.html">Agendamento para retirada do medicamento</a>
               <br>
    </div>
    <div class="box">
        <img src="../imagens/DEXAMETASONA.jpg" alt="" width="300px" height="300px">
      <h3>dexametasona</h3>
      <a href="../mapas.html"> <p href="     ">Disponivel nos postos: 10 e 2 de ceilandia</p></a>
               <a href="agendamentoVacina.html">Agendamento para retirada do medicamento</a>
               <br>
  </div>-->
  
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
