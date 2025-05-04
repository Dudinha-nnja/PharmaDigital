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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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


  <title>Chat Flutuante</title>
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

    .chat-flutuante {
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 300px;
      background-color: rgba(0, 0, 0, .5);
      border-radius: 10px;
      padding: 10px;
      box-sizing: border-box;
      color: #fff;
    }

    .chat-flutuante h2 {
      margin: 0 0 10px;
      padding: 0;
      color: #fff;
      text-align: center;
    }

    .chat-flutuante .message-box {
      overflow-y: scroll;
      max-height: 200px;
    }

    .chat-flutuante .message-box .message {
      background-color: rgba(255, 255, 255, .1);
      padding: 5px;
      margin-bottom: 5px;
      border-radius: 5px;
    }

    .chat-flutuante .message-box .user-message {
      text-align: right;
    }

    .chat-flutuante .message-box .user-message .message {
      background-color: #03e9f4;
      color: #fff;
    }

    .chat-flutuante .message-box .bot-message {
      text-align: left;
    }

    .chat-flutuante .user-input {
      display: flex;
    }

    .chat-flutuante .user-input input {
      flex-grow: 1;
      padding: 5px;
      border-radius: 5px 0 0 5px;
      border: none;
      outline: none;
    }

    .chat-flutuante .user-input button {
      background-color: #03e9f4;
      color: #fff;
      border: none;
      border-radius: 0 5px 5px 0;
      padding: 5px 10px;
      cursor: pointer;
    }
  </style>

<body>
  <div class="chat-flutuante">
    <h2>Chat</h2>
    <div class="message-box">
      <div class="message user-message">
        <span>Olá! Como posso ajudar?</span>
      </div>
      <div class="message bot-message">
        <span>Bem-vindo ao chat!</span>
      </div>
    </div>
    <div class="user-input">
      <input type="text" placeholder="Digite sua mensagem">
      <button>Enviar</button>
    </div>
  </div>
</body>

</html>
