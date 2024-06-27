<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discipulado</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #121212;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

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
            padding: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #121212;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #FCDC13;
            clip-path: circle(50% at bottom right);
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
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
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            font-size: 19px;
            margin-left: 100px;
        }

        header .navegation li a:hover {
            color: #FCDC13;
        }

        .login-container {
            background-color: #252525;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            width: 100%;
            display: flex;
            
            justify-content: space-between;
            
        }

        .login-form {
            width: 30%;
            
        }

        .login-container h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
            color: #FCDC18;
            margin-bottom: 30px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-top: 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 6px;
            background-color: #f5f5f5;
            font-size: 16px;
            color: #333333;
            box-sizing: border-box;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .login-container button[type="submit"] {
            width: 100%;
            background-color: #FCDC18;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .login-container button[type="submit"]:hover {
            background-color: #eead2d;
        }

        .login-container .links {
            text-align: center;
            margin-top: 20px;
        }

        .login-container .links a {
            display: block;
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            transition: color 0.3s ease;
            margin-top: 10px;
        }

        .login-container .links a:hover {
            color: #FCDC18;
        }

        .login-container input[type="date"] {
            width: calc(100% - 1px);
            padding: 15px;
            margin-top: 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 6px;
            background-color: #f5f5f5;
            font-size: 16px;
            color: #333333;
            box-sizing: border-box;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);

        }

        .login-container input[type="number"] {
            width: calc(100% - 1px);
            padding: 15px;
            margin-top: 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 6px;
            background-color: #f5f5f5;
            font-size: 16px;
            color: #333333;
            box-sizing: border-box;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            -webkit-appearance: none;
            -moz-appearance: textfield;
            appearance: textfield;

        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            width: 80%;
            margin: 20px auto;
            color: white;
        }

        .footer p {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="number"]').on('mousewheel', function(e) {
                $(this).blur();
            });
        });
    </script>

</head>
<header>
    <a href="{{ route('index') }}"><img src="/storage/logoievv.png" alt="" class="logo"></a>
    <nav class="navegation">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('location') }}">Localização</a></li>
            <li><a href="{{ route('discipleship.index') }}">Aulas</a></li>
        </ul>
    </nav>
</header>

<body>
    <div class="login-container">
        <div class="login-form">
            <h2>ATUALIZAR E-MAIL</h2>
            <form action="/reset-password" method="post">
                @csrf
                <input type="text" placeholder="E-mail em uso">
                @error('verification_code')
                <span>{{ $message }}</span>
                @enderror
                <input type="text" placeholder="Novo E-mail">
                @error('new_password')
                <span>{{ $message }}</span>
                @enderror
                <input type="text" placeholder="Confirme o E-mail">
                <button type="submit">Salvar</button>
            </form>
        </div>

        <div class="login-form">
            <h2>ATUALIZAR SENHA</h2>
            <form action="/reset-password" method="post">
                @csrf
                <input type="text" placeholder="E-mail em uso">
                @error('verification_code')
                <span>{{ $message }}</span>
                @enderror
                <input type="text" placeholder="Novo E-mail">
                @error('new_password')
                <span>{{ $message }}</span>
                @enderror
                <input type="text" placeholder="Confirme o E-mail">
                <button type="submit">Salvar</button>
            </form>
        </div>

        <div class="login-form">
            <h2>DADOS PESSOAIS</h2>
            <form action="/reset-password" method="post">
                @csrf
                <input type="text" placeholder="Nome completo">
                @error('verification_code')
                <span>{{ $message }}</span>
                @enderror
                <input type="date" placeholder="Data de nascimento">
                @error('new_password')
                <span>{{ $message }}</span>
                @enderror
                <input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Telefone">
                <button type="submit">Salvar</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <p>© 2024 Discipulado Verbo da Vida Praia</p>
    </div>
</body>

</html>