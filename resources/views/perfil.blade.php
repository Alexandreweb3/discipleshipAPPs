<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Perfil</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;0,700;1,300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 100px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #121212;
            overflow: hidden;
        }

        header {
            position: absolute;
            background-color: black;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .logo {
            position: relative;
            max-width: 150px;
        }

        header .navegation ul {
            position: relative;
            display: flex;
        }

        header .navegation li {
            list-style: none;
        }

        header .navegation li a {
            display: inline-block;
            color: #ffffff;
            font-weight: 500;
            text-decoration: none;
            font-size: 16px;
            margin-left: 20px;
            transition: color 0.3s ease-in-out;
        }

        header .navegation li a:hover {
            color: #0D4DC7;
        }
    </style>
</head>

<body>
    <header>
        <a href={{ route('index') }}><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
        <nav class="navegation">
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('contato') }}">Contatos</a></li>
                <li><a href="{{ route('location') }}">Localização</a></li>
                <li><a href="{{ route('index') }}">Sair</a></li>
            </ul>
        </nav>
    </header>
    <div class="profile-card">
        <h1>Formulário de Perfil do Usuário</h1>
        <form action="submit.php" method="post">
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="bio">Biografia:</label><br>
            <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="age">Idade:</label>
            <input type="number" id="age" name="age" required><br><br>
            
            <label for="location">Localização:</label>
            <input type="text" id="location" name="location"><br><br>
            
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>
