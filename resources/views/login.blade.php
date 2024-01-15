<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Discipulado</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #121212;
            margin: 0;
        }

        header {
            background-color: #444;
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
            padding: 8px;
            margin: 0 5px;
            font-size: 14px;
        }

        .container {
            background-color:#FCDC13;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
            text-align: center; /* Centraliza o texto na div */
        }

        h2 {
            color: #333;
        }

        .form {
            margin-top: 30px;
            text-align: left; 
        }

        input[type="text"],
        input[type="password"],
        button {
            display: block;
            margin-bottom: 10px;
            padding: 8px;
            width: calc(100% - 16px);
            box-sizing: border-box;
            border-radius: 10px;
            border: none
        }

        button {
            background-color: dodgerblue;
            border: none;
            padding: 12px;
            width: calc(100% - 16px);
            border-radius: 10px;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkblue;
        }

        .span {
            color: red;
            font-size: 14px;
        }

        .forgot-password {
            display: inline-block;
            font-size: 12px;
            margin-top: 5px;
            color: white;
            text-align: center;
        }

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
            <a href="{{ route('index') }}" class="custom-link">Home</a>
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
            <input type="text" name="email" placeholder="E-mail">
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

</html>