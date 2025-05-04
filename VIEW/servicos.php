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
<html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharma Digital</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #000;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo img {
            width: 50px;
            height: 50px;
        }
        
        .logo a {
            font-size: 24px;
            color: #FFF;
            text-decoration: none;
            font-weight: bold;
        }
        
        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        nav a {
            font-size: 18px;
            color: #FFF;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }
        
        nav a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
            <a href="index.php">Pharma Digital</a>
        </div>
        <nav>
            <a href="localizacao.php">Localização</a>
            <a href="servicos.php">Serviços</a>
            <a href="agendamento.php">Agendamentos</a>
            <a href="chat.php">Chat</a>
            <a href="login.php">Login</a>
             <a href="../CONTROLLER/logoffController.php">Sair</a>
        </nav>
    </header>
</body>
</html>


  <title>Serviços</title>
  <style>
    html {
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: linear-gradient(#141e30, #243b55);
    }

    .servicos {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
    }

    .servicos .opcoes {
      width: 50%;
      text-align: center;
    }

    .servicos .opcoes h2 {
      margin: 0;
      padding: 0;
      color: #fff;
      text-align: center;
    }

    .servicos .opcoes a {
      display: inline-block;
      padding: 10px 20px;
      margin: 10px;
      color: #03e9f4;
      font-size: 16px;
      text-decoration: none;
      text-transform: uppercase;
      border-radius: 5px;
      border: 1px solid #03e9f4;
      background-color: transparent;
      transition: .5s;
    }

    .servicos .opcoes a:hover {
      background-color: #03e9f4;
      color: #fff;
    }

    .servicos .imagens {
      display: none;
    }

    .servicos .imagens.active {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .servicos .imagens img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      margin: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .servicos .imagens img:hover {
      opacity: 0.8;
    }

    .servicos .disponibilidade {
      display: none;
      text-align: center;
    }

    .servicos .disponibilidade.active {
      display: block;
    }
  </style>
  <script>
    function mostrarImagensMedicamentos() {
      var imagensMedicamentos = document.querySelector('.imagens.medicamentos');
      imagensMedicamentos.classList.toggle('active');
    }

    function mostrarImagensVacinas() {
      var imagensVacinas = document.querySelector('.imagens.vacinas');
      imagensVacinas.classList.toggle('active');
    }

    function mostrarDisponibilidade(element) {
      var disponibilidade = element.nextElementSibling;
      disponibilidade.classList.toggle('active');
    }
  </script>


<body>
  <div class="servicos">
    <div class="opcoes">
      <h2>Selecione um Serviço:</h2>
      <a href="javascript:void(0)" onclick="mostrarImagensMedicamentos()">Medicamentos</a>
      <a href="javascript:void(0)" onclick="mostrarImagensVacinas()">Vacinas</a>
    </div>
    <div class="imagens medicamentos">
      <img src="medicamento1.jpg" alt="Medicamento 1" onclick="mostrarDisponibilidade(this)">
      <div class="disponibilidade">
        <h3>Medicamento 1</h3>
        <p>Disponibilidade:...</p>
      </div>
      <img src="medicamento2.jpg" alt="Medicamento 2" onclick="mostrarDisponibilidade(this)">
      <div class="disponibilidade">
        <h3>Medicamento 2</h3>
        <p>Disponibilidade:...</p>
      </div>
      <img src="medicamento3.jpg" alt="Medicamento 3" onclick="mostrarDisponibilidade(this)">
      <div class="disponibilidade">
        <h3>Medicamento 3</h3>
        <p>Disponibilidade:...</p>
      </div>
    </div>
    <div class="imagens vacinas">
      <img src="vacina1.jpg" alt="Vacina 1" onclick="mostrarDisponibilidade(this)">
      <div class="disponibilidade">
        <h3>Vacina 1</h3>
        <p>Disponibilidade:...</p>
      </div>
      <img src="vacina2.jpg" alt="Vacina 2" onclick="mostrarDisponibilidade(this)">
      <div class="disponibilidade">
        <h3>Vacina 2</h3>
        <p>Disponibilidade:...</p>
      </div>
      <img src="vacina3.jpg" alt="Vacina 3" onclick="mostrarDisponibilidade(this)">
      <div class="disponibilidade">
        <h3>Vacina 3</h3>
        <p>Disponibilidade:...</p>
      </div>
    </div>
  </div>
</body>

</html>
