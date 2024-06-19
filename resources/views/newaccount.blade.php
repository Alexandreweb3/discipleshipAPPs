<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discipulado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #121212;
            color: #FCDC13;
            padding: 0;
            margin: 0;
        }

        section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 100px;
            min-height: 100vh;
            box-sizing: border-box;
        }

        header {
            width: 100%;
            padding: 40px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #121212;
            z-index: 1000;
            top: 0;
            left: 0;
        }

        header .logo {
            max-width: 150px;
        }

        header .navegation ul {
            display: flex;
            padding: 0;
        }

        header .navegation li {
            list-style: none;
        }

        header .navegation li a {
            display: inline-block;
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            font-size: 19px;
            margin-left: 100px;
        }

        header .navegation li a:hover {
            color: #FCDC13;
        }

        form {
            background-color: #171717;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 450px;
            margin-top: 50px;
            margin: auto;
        }

        form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            color: #fff;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #121212;
            border-color: #252525;
        }

        form input[type="submit"] {
            background-color: #FCDC13;
            color: #121212;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        form input[type="submit"]:hover {
            background-color: #e6c27c;
        }
    </style>
</head>

<body>
    <header>
        <a href="{{ route('index') }}"><img src="\storage\logoievv.png" alt="" class="logo"></a>
        <nav class="navegation">
            <ul>
                <li><a href="{{ route('login.login') }}">login</a></li>
                <li><a href="{{ route('index') }}">Sair</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div></div> <!-- Placeholder para conteúdo à esquerda -->

        <form action="/criar-conta" method="POST">
            <h2 class="tittle">Criar Conta</h2>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required>

            <input type="submit" value="Criar Conta">
        </form>
    </section>
</body>

</html>
