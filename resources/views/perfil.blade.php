<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            align-items: center;
            /* Centraliza conteúdo verticalmente */
        }

        header {
            background-color: black;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
            width: 100%;
        }

        header .logo {
            max-width: 150px;
        }

        header .navegation ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        header .navegation li {
            margin-left: 20px;
        }

        header .navegation li a {
            color: #ffffff;
            font-weight: 500;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease-in-out;
        }

        header .navegation li a:hover {
            color: #0D4DC7;
        }

        .forms {
            margin: auto;
            background: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .forms h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .forms form label {
            display: block;
            margin-bottom: 10px;
        }

        .forms form input[type="text"],
        .forms form input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .forms form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .forms form input[type="submit"]:hover {
            background-color: #0D4DC7;
        }

        .forms form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <a href={{ route('index') }}><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contatos</a></li>
                    <li><a href="#">Aulas</a></li>
                    <li><a href="#">Sair</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <br>
    <br>
    <div class="forms">
        <h1>Meu Perfil</h1>
        <form action="#" method="post">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="numero">Número:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail</label>
            <input type="text" id="nome" name="nome" required>

            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="pergunta1">Você é nascido de novo?</label>
            <select id="pergunta1" name="pergunta1" required>
                <option value="">Selecione uma opção</option>
                <option value="opcao1">Sim</option>
                <option value="opcao2">Não</option>
            </select>

            <label for="pergunta2">Você é Batizado nas águas?</label>
            <select id="pergunta2" name="pergunta2" required>
                <option value="">Selecione uma opção</option>
                <option value="opcao1">Sim</option>
                <option value="opcao2">Não</option>
            </select>

            <label for="pergunta2">Qual tipo de Batismo nas águas realizado?</label>
            <select id="pergunta2" name="pergunta2" required>
                <option value="">Imersão</option>
                <option value="opcao1">Aspersão</option>
                <option value="opcao2">Não sou batizado nas águas</option>
            </select>

            <label for="pergunta2">Você é Batizado no Espírito Santo?</label>
            <select id="pergunta2" name="pergunta2" required>
                <option value="">Sim</option>
                <option value="opcao1">Não</option>
            </select>

            <input type="submit" value="Salvar">
        </form>
    </div>
    </div>
</body>

</html>
