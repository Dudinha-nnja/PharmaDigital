<!DOCTYPE html>
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
        <style>
           




            /*=============== GOOGLE FONTS ===============*/
:root {
  --header-height: 3rem;
  /*========== Colors ==========*/
  --hue: 45;
  --sat: 98%;
  --first-color: hsl(var(--hue), var(--sat), 60%);
  --first-color-light: hsl(var(--hue), var(--sat), 85%);
  --first-color-lighten: hsl(var(--hue), var(--sat), 80%);
  --first-color-alt: hsl(var(--hue), var(--sat), 53%);
  --title-color: hsl(var(--hue), 4%, 15%);
  --text-color: hsl(var(--hue), 4%, 35%);
  --text-color-light: hsl(var(--hue), 4%, 65%);
  --body-color: hsl(var(--hue), 0%, 100%);
  --container-color: #FFF;
  --scroll-bar-color: hsl(var(--hue), 4%, 85%);
  --scroll-thumb-color: hsl(var(--hue), 4%, 75%);
  /*========== Font and typography ==========*/
  --body-font: 'Poppins', sans-serif;
  --biggest-font-size: 2rem;
  --h2-font-size: 1.25rem;
  --h3-font-size: 1.125rem;
  --normal-font-size: .938rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;
  /*========== Font weight ==========*/
  --font-semi-bold: 600;
  --font-bold: 700;
  /*========== Margenes ==========*/
  --mb-0-5: .5rem;
  --mb-0-75: .75rem;
  --mb-1: 1rem;
  --mb-1-5: 1.5rem;
  --mb-2: 2rem;
  /*========== z index ==========*/
  --z-tooltip: 10;
  --z-fixed: 100;
}

@media screen and (min-width: 968px) {
  :root {
    --biggest-font-size: 3rem;
    --h2-font-size: 1.75rem;
    --h3-font-size: 1.25rem;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
  }
}

/*=============== BASE ===============*/
*, ::before, ::after {
  box-sizing: border-box;
  padding: 0;
  margin: 0;

}

html {
  scroll-behavior: smooth;
}

body {
  margin: var(--header-height) 0 0 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background-color: #fff;
  color: var(--text-color);
  transition: .5s;
}

h1, h2, h3 {
  font-weight: var(--font-semi-bold);
  color: var(--title-color);
  line-height: 1.5;
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*=============== THEME ===============*/


/*========== Button Dark/Light ==========*/
.change-theme {
  position: absolute;
  right: 1.5rem;
  top: 2.2rem;
  color: var(--title-color);
  font-size: 1.8rem;
  cursor: pointer;
}

.dark-theme .footer {
  background-color: var(--container-color);
}

/*=============== REUSABLE CSS CLASSES ===============*/
.section {
  padding: 4.5rem 0 1rem;
}

.section__title, .section__title-center {
  font-size: var(--h2-font-size);
  color: var(--title-color);
  text-align: center;
  margin-bottom: var(--mb-1);
}

.svg__color {
  fill: var(--first-color);
}

.svg__blob {
  fill: var(--first-color-light);
}

.svg__img {
  width: 300px;
  justify-self: center;
}

/*=============== LAYOUT ===============*/
.container {
  max-width: 968px;
  margin-left: var(--mb-1-5);
  margin-right: var(--mb-1-5);
}

.grid {
  display: grid;
  gap: 1.5rem;
}

/*=============== HEADER ===============*/


/*=============== HOME ===============*/
.home__container {
  row-gap: 3rem;
}

.home__title {
  font-size: var(--biggest-font-size);
  font-weight: var(--font-bold);
  margin-bottom: var(--mb-0-75);
}

.home__description {
  margin-bottom: var(--mb-2);
}

/*=============== BUTTONS ===============*/
.button {
  display: inline-block;
  background-color: var(--first-color);
  color: #1A1A1A;
  padding: .75rem 1.5rem;
  border-radius: 3rem;
  font-weight: var(--font-semi-bold);
  transition: .3s;
}

.button:hover {
  background-color: var(--first-color-alt);
}

.button__header {
  display: none;
}

.button-link {
  background: none;
  padding: 0;
  color: var(--title-color);
}

.button-link:hover {
  background-color: transparent;
}

.button-flex {
  display: inline-flex;
  align-items: center;
  column-gap: .25rem;
  padding: .75rem 1rem;
}

.button__icon {
  font-size: 1.5rem;
}

/*=============== ABOUT ===============*/
.about__container {
  gap: 2.5rem;
}

.about__data {
  text-align: center;
}

/*=============== SECURITY ===============*/
.security__container {
  gap: 2.5rem;
}

.security__data {
  text-align: center;
}

/*=============== SERVICES ===============*/
.services__container {
  padding-top: 1rem;
}

.services__data {
  display: grid;
  row-gap: 1rem;
  background-color: var(--container-color);
  box-shadow: 0px 2px 6px hsla(var(--hue), 100%, 15%, 0.15);
  padding: 2rem 1.5rem;
  border-radius: 1rem;
  text-align: center;
}

.services__img {
  width: 135px;
  justify-self: center;
  margin-bottom: var(--mb-0-5);
}

/*=============== APP ===============*/
.app__container {
  gap: 2.5rem;
}

.app__data {
  text-align: center;
}

.app__description {
  margin-bottom: var(--mb-1-5);
}

.app__buttons {
  display: grid;
  grid-template-columns: repeat(2, max-content);
  justify-content: center;
  gap: .5rem;
}

/*=============== CONTACT ===============*/
.contact__container {
  padding-bottom: 3rem;
}

.contact__description {
  text-align: center;
}

.contact__content {
  row-gap: .75rem;
}

.contact__address {
  font-size: var(--small-font-size);
  font-weight: var(--font-semi-bold);
  color: var(--title-color);
}

.contact__information {
  font-weight: initial;
  color: var(--text-color);
}

/*=============== FOOTER ===============*/
.footer {
  background-color: #06194e;
  padding-bottom: 2rem;
}

.footer__container {
  row-gap: 2rem;
}

.footer__logo, .footer__title {
  font-size: var(--h3-font-size);
  margin-bottom: var(--mb-0-75);
}

.footer__logo {
  display: inline-block;
  font-weight: var(--font-semi-bold);
  color: var(--title-color);
}

.footer__description, .footer__link {
  font-size: var(--small-font-size);
}

.footer__links {
  display: grid;
  row-gap: .5rem;
}

.footer__link {
  color: var(--title-color);
}

.footer__social {
  display: flex;
  column-gap: 1.5rem;
}

.footer__social-link {
  font-size: 1.25rem;
  color: var(--title-color);
}

.footer__copy {
  margin-top: 6rem;
  text-align: center;
  font-size: var(--smaller-font-size);
  color: var(--text-color);
}

/*=============== SCROLL UP ===============*/
.scrollup {
  position: fixed;
  background: var(--first-color);
  right: 1rem;
  bottom: -20%;
  display: inline-flex;
  padding: .3rem;
  border-radius: .25rem;
  z-index: var(--z-tooltip);
  opacity: .8;
  transition: .4s;
}

.scrollup:hover {
  background-color: var(--first-color);
  opacity: 1;
}

.scrollup__icon {
  font-size: 1.25rem;
  color: var(--title-color);
}

/* Show Scroll Up*/
.show-scroll {
  bottom: 3rem;
}

/*=============== SCROLL BAR ===============*/
::-webkit-scrollbar {
  width: .6rem;
  border-radius: .5rem;
  background-color: var(--scroll-bar-color);
}

::-webkit-scrollbar-thumb {
  background-color: var(--scroll-thumb-color);
  border-radius: .5rem;
}

::-webkit-scrollbar-thumb:hover {
  background-color: var(--text-color-light);
}

/*=============== MEDIA QUERIES ===============*/
/* For small devices */
@media screen and (max-width: 360px) {
  .svg__img {
    width: 100%;
  }
  .section {
    padding: 3.5rem 0 1rem;
  }
  .services__img {
    width: 100px;
  }
  .app__buttons {
    grid-template-columns: max-content;
  }
}

/* For medium devices */
@media screen and (min-width: 576px) {
  .svg__img {
    width: 100%;
  }
  .section__title-center {
    text-align: initial;
  }
  .home__container,
  .about__container,
  .security__container,
  .services__container,
  .app__container,
  .contact__container,
  .footer__container {
    grid-template-columns: repeat(2, 1fr);
  }
  .home__img {
    order: 1;
  }
  .home__container,
  .about__container,
  .security__container,
  .app__container,
  .contact__container {
    align-items: center;
  }
  .about__data,
  .security__data,
  .app__data,
  .contact__description {
    text-align: initial;
  }
  .about__img,
  .app__img {
    order: -1;
  }
}

@media screen and (min-width: 767px) {
  body {
    margin: 0;
  }
  .section {
    padding: 6rem 0 2rem;
  }
  .nav {
    height: calc(var(--header-height) + 1.5rem);
  }
  .nav__list {
    flex-direction: row;
    column-gap: 2.5rem;
  }
  .nav__toggle {
    display: none;
  }
  .change-theme {
    position: initial;
  }
  .home__container {
    padding: 6rem 0 2rem;
  }
  .app__buttons {
    justify-content: initial;
  }
}

/* For large devices */
@media screen and (min-width: 968px) {
  .button__header {
    display: block;
  }
  .svg__img {
    width: 470px;
  }
  .about__container,
  .security__container,
  .app__container,
  .contact__container {
    column-gap: 6rem;
  }
  .services__container {
    grid-template-columns: repeat(3, 1fr);
  }
  .contact__container {
    grid-template-columns: 3fr 1.5fr 1.25fr;
  }
  .footer__container {
    grid-template-columns: repeat(5, 1fr);
  }
  .footer__social {
    align-items: flex-start;
  }
  .footer__social-link {
    font-size: 1.45rem;
  }
}

@media screen and (min-width: 1024px) {
  .container {
    margin-left: auto;
    margin-right: auto;
  }
  .home__img {
    width: 540px;
  }
  .home__description {
    padding-right: 5rem;
  }
  .footer__container {
    column-gap: 3rem;
  }
  .scrollup {
    right: 2rem;
  }
}

.todo__steps {
  padding-top: 5%;
}

.todo__step {
  display: flex;
  flex-direction: column;
}

.todo__step-desc {
  text-align: center;
  padding: 0 15px;
  order: 2;
  position: relative;
}

.todo__step-desc span {
  position: relative;
  font-family: "Red Hat Display", serif;
  font-size: 2.5rem;
  color: var(--orange);
}

.todo__step-desc span:before {
  content: "";
  background-color: var(--pink);
  position: absolute;
  width: 70px;
  height: 70px;
  z-index: -1;
  border-radius: 50%;
  transform: translate(-12%, -10%);
}

.center span:before {
  transform: translate(-18%, -10%);
}

.todo__step-desc h5 {
  padding-top: 15px;
  font-size: 2.875rem;
  font-family: "Domine", serif;
  color: var(--green);
  text-transform: capitalize;
}

.todo__step-desc p {
  font-size: 1.125rem;
  font-family: "Domine", serif;
  color: var(--gray);
  text-transform: capitalize;
  padding-top: 20px;
}

.todo__step-img {
  order: 1;
  padding: 15px 0;
  text-align: center;
}

.todo__step-img img {
  max-width: 565px;
}

@media (min-width: 62rem) {
  .todo__step {
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
  }
  .todo__step-desc {
    display: flex;
    flex-direction: row;
    align-items: center;
    text-align: initial;
    max-width: 800px;
    width: 100%;
    order: 1;
  }
  .todo__step-img {
    order: 2;
  }
  .todo__step-desc span {
    display: flex;
    align-items: baseline;
  }
  .ml {
    margin-left: 44px;
  }
  .todo__step:nth-child(even) .todo__step-desc {
    order: 2;
  }
  .todo__step:nth-child(even) .todo__step-img {
    order: 1;
  }
  .todo__step-desc span:before {
    transform: translate(-12%, 10%);
  }

  .center span:before {
    transform: translate(-18%, 10%);
  }

  .todo__dec-1 img {
    display: initial;
  }
  .todo__dec-2 img {
    display: initial;
  }
  .todo__dec-3 img {
    display: initial;
  }
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
                background: #06194e;
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
                color: #FFF;
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
                color: #FFF;
                font-size: 25px;
                cursor: pointer;
                margin-left: -4px;
                transition: all 0.3s ease;
            }
            #sidebar-close {
                display: none;
                color: #FFF;
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
                color:#FFF;
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
                background: #FFF;
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
                color: #FFF;
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
                    <img src="IMAGENS/4 (1).png" alt="logo_img" />
                </span>
                <span class="logo_name">Pharma Digital</span>
                <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
                <i class="bx bx-x" id="sidebar-close"></i>
            </div>
            <div class="menu_container">
                <div class="menu_items">
                    <ul class="menu_item">

                        <li class="item">
                            <a href="index.php" class="link flex">
                                <i class="fa-solid fa-house"></i>
                                <span>Pagina inicial</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="VIEW/localizacao.php" class="link flex">
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
                            <a href="VIEW/medicacoes.php" class="link flex">
                                <i class="fa-sharp fa-solid fa-pills"></i>
                                <span>Medicações</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="VIEW/vacinas.php" class="link flex">
                                <i class="fa-solid fa-syringe"></i>
                                <span>Vacinações</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="VIEW/agendamentogeral.php" class="link flex">
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
                                <a href="CHAT/Group_chat.php" class="link flex">
                               <i class="fa-solid fa-comments"></i>
                        <span>Chat</span>
                            </a>
                        </li>

                         <li class="item">
                            <a href="VIEW/informacoes.php" class="link flex">
                                <i class="fa-solid fa-circle-info"></i>
                                <span>Informações</span>
                            </a>
                        </li>

                        <li class="item">
                            <a href="VIEW/login.php" class="link flex">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <span>Login</span>
                            </a>
                        </li>
                    </ul>
                </div>

                
                </div>
            </div>
        </nav>
      
              
        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section" id="home" style="color:#134c63";>
                <div class="home__container container grid">
                    <img src="IMAGENS/Online Doctor-amico (1).png" alt="">

                    <div class="home__data">
                        <h1 class="home__title">Seja bem-vindo á <br> Pharma Digital!</h1>
                        <p class="home__description">Espero que possamos te ajudar.</p>

                    

                    </div>   
                </div>
            </section>


            <section class="about section container" id="about">
                <div class="about__container grid">
                    <div class="about__data">
                        <h2 class="section__title-center">Mas afinal...<br> O que é a Pharma Digital?</h2>
                        <p class="about__description">A proposta do sistema Pharma Digital (PD) Gestão de Medicamentos para ser utilizado nas Farmácias UBS/DF, a fim de viabilizar o gerenciamento da distribuição de medicamentos pelo SUS por meio do controle de estoque em tempo real possibilitando ao usuário uma pesquisa prévia da disponibilidade de medicamento para evitar deslocamentos desnecessários, filas, transtornos e até acionamentos judiciais, além de compor o ferramental necessário à gestão eficaz dessas disponibilidades, buscando a redução e otimização do tempo de atendimento das demandas dos usuários.


                        </p>
                    </div>

                    <img src="IMAGENS/Pharma Digital (1).png" alt="">
                </div>
            </section>

            <main class="main">
              <!--=============== HOME ===============-->
              <section class="home section" id="home">
                  <div class="home__container container grid">
                      <img src="IMAGENS/Tempo.png" alt="">
  
                      <div class="home__data">
                          <h1 class="home__title">Porque usar a <br> Pharma Digital?</h1>
  
                      
  
                      </div>   
                  </div>
              </section>
  
   <!-- step 1 -->
              <div class="todo__step"style="margin-left: 150px;">
                  <span 
                    ><div class="numero" style="color: #06194e;">01</div>
                    
                    <div class="ml">
                      <h5 style="color: #1d49c2;">O tempo</h5>
                      <p>
                        Você não precisa ir no posto de saúde para saber se o seu medicamento está lá, você pode olhar pelo Pharma Digital antes de sair de casa!  </p>
                    </div>
                  </span>
                </div>
                
              </div>
              <!-- step 2 -->
              <div class="todo__step" style="margin-left: 150px;">
                 <span
                    > <div class="numero" style="color: #06194e;">02</div>
                    
                    <div class="ml">
                      <h5 style="color: #06194e;">Agendamentos</h5>
                      <p>
                      Na Pharma Digital você consegue realizar o agendamento do seu medicamento ou da vacina que você precisa, sem se preocupar se no dia que você poderá ir, irá ter acabado!
                      </p>
                    </div>
                  </span>
                </div>
              
              </div>
              <!-- step 3 -->
              <div class="todo__step" style="margin-left: 150px;">
                 <span>
                 <div class="numero" style="color: #06194e;">03</div>   
                    <div class="ml">
                      <h5 style="color: #134c63;">Informações</h5>
                      <p>
                        Você consegue saber aonde e quais medicações estão disponiveis nos postos de saúde sem sair de casa! </p>
                    </div></span
                  >
                </div>
                <div class="todo__step-img">
               
                </div>
              </div>
              <!-- step 4 -->
              <div class="todo__step" style="margin-left: 150px;">
                  <span
                    ><div class="numero" style="color: #06194e;">04</div>
                    <div class="ml">
                      <h5 style="color: #533eb3;">Ajuda</h5 >
                      <p>
                      Nós conseguimos tirar suas duvidas e te ajudar caso necessario por chat! </p>
                    </div></span
                  >
                </div>
                    </div>
            </section>
           
                </div>
              </div>
            </div>
          </div>
        </section>
<div class="ativamente">
  <h1 style="color: #06194e; margin-left: 300px;">Pharma Digital junto com ATIVAmente!</h1>
  <p style="margin-left: 300px;"> O ATIVAmente é uma plataforma que busca ajudar as pessoas que frequentam o CAPS</p>
  <img src="IMAGENS/ATIVAmente.png" alt="" style="width: 800px; height: 600px; margin-left: 300px;">
</div>
        </main>
       
      <!--=============== SERVICES ===============-->
      <section class="services section container" id="services">
        <h2 class="section__title">Criadores de <br> Pharma Digital</h2>
        <div class="services__container grid">
            <div class="services__data">
                <h3 class="services__subtitle">Eduarda</h3>
                <img src="IMAGENS/mulher (4).png" alt="">
                <p class="services__description"></p>
                <div>
            
                </div>
            </div>

            <div class="services__data">
                <h3 class="services__subtitle">Maycon</h3>
                <img src="IMAGENS/vandalo.png" alt="">
                <p class="services__description"></p>
                <div>
            
                </div>
            </div>

            <div class="services__data">
                <h3 class="services__subtitle">Marta</h3>
                <img src="IMAGENS/mulher (5).png" alt="">
                <p class="services__description"></p>
                <div>
              
                </div>
         
            </div>
        </div>
    </section>
    <section class="services section container" id="services">
        <div class="services__container grid">
            <div class="services__data">
                <h3 class="services__subtitle">Leonardo</h3>
                <img src="IMAGENS/homem (1).png" alt="">
                <p class="services__description"></p>
                <div>
            
                </div>
            </div>

            <div class="services__data">
                <h3 class="services__subtitle"></h3>
    <img src="" alt="">
                <p class="services__description"></p>
                <div>
            
                </div>
            </div>

            <div class="services__data">
                <h3 class="services__subtitle">Vicente</h3>
                <img src="IMAGENS/vovo.png" alt="">
                <p class="services__description"></p>
                <div>
            
                </div>
         
            </div>
        </div>
    </section>
        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Pharma Digital</a>
                    <p class="footer__description"><br></p>
                </div>

                     </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== MAIN JS ===============-->
        <script>
            /*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    
    // Validate that variables exist
    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 50,
              sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const nav = document.getElementById('header')
    // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 80) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== SHOW SCROLL UP ===============*/
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== DARK LIGHT THEME ===============*/
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-toggle-right'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-toggle-left' : 'bx-toggle-right'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx-toggle-left' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})
        </script>
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
                    </body>
                    </html>
                    