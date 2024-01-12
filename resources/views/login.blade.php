<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Discipulado</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #555555;
            margin: 0;
        }

        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        .menu-toggle {
            display: none;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 10px;
            margin: 0 10px;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }

        .h2 {
            color: #333;
        }

        .form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="password"],
        button {
            display: block;
            margin-bottom: 10px;
            padding: 8px;
            width: calc(100% - 16px);
            /* Diminui o tamanho dos inputs */
            box-sizing: border-box;
        }

        button {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: calc(100% - 16px);
            /* Igualando largura aos inputs */
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkblue;
        }

        .span {
            color: red;
            font-size: 14px;
        }

        /* Estilos para telas menores */
        @media only screen and (max-width: 600px) {
            nav {
                flex-direction: column;
                align-items: center;
            }

            .menu-toggle {
                display: block;
                cursor: pointer;
                order: 1;
            }

            nav a {
                display: none;
                order: 3;
            }

            nav.show a {
                display: block;
            }
        }
    </style>
</head>

<body>
    <header>
        <span class="menu-toggle" onclick="toggleMenu()">☰ Menu</span>
        <nav>
            <a href="{{ route('index') }}" class="custon-link">Home</a>
        </nav>
    </header>

    <div class="container">
        <h2>Login</h2>

        @if (session()->has('success'))
            {{ session()->get('success') }}
        @endif

        @error('error')
            <span>{{ $message }}</span>
        @enderror

        <form action="{{ route('login.login') }}" method="post" class="form">
            @csrf
            <input type="text" name="email" placeholder="Adicione seu E-mail">
            @error('email')
                <span>{{ $message }}</span>
            @enderror

            <input type="password" name="password" placeholder="Senha">
            @error('password')
                <span>{{ $message }}</span>
            @enderror

            <button type="submit">Login</button>
            <a href="#" class="forgot-password">Esqueceu a senha?</a>
        </form>
    </div>

    <script>
        function toggleMenu() {
            document.querySelector('nav').classList.toggle('show');
        }
    </script>
</body>
