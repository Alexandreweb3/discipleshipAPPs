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

        body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        header {
            background-color: black;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
    
        }

        header .logo {
            max-width: 150px;
        }

        header .navegation ul {
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
    <div class="container">
        <header>
            <a href={{ route('index') }}><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('contato') }}">Contatos</a></li>
                    <li><a href="{{ route('discipleship.index') }}">Aulas</a></li>
                    <li><a href="{{ route('index') }}">Sair</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <div class="form-container">
                <h1>Meu Perfil</h1>
                <form action="#" method="post">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
    
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
    
                    <label for="pergunta1">Pergunta 1:</label>
                    <select id="pergunta1" name="pergunta1" required>
                        <option value="">Selecione uma opção</option>
                        <option value="opcao1">Opção 1</option>
                        <option value="opcao2">Opção 2</option>
                        <option value="opcao3">Opção 3</option>
                    </select>
    
                    <label for="pergunta2">Pergunta 2:</label>
                    <select id="pergunta2" name="pergunta2" required>
                        <option value="">Selecione uma opção</option>
                        <option value="opcao1">Opção 1</option>
                        <option value="opcao2">Opção 2</option>
                        <option value="opcao3">Opção 3</option>
                    </select>
    
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
</body>

</html>
