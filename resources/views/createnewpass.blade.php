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

        .login-container {
            background-color: #252525;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
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
    <script>
        function showResetPasswordForm() {
            document.getElementById('send-code-form').style.display = 'none';
            document.getElementById('reset-password-form').style.display = 'block';
        }
    </script>
</head>

<body>
    <div class="login-container">
        <h2>REDEFINIR SENHA</h2>
        
        <form action="/reset-password" method="post" class="form">
            @csrf
            <input type="text" name="verification_code" placeholder="Código de Verificação">
            @error('verification_code')
            <span>{{ $message }}</span>
            @enderror
            <input type="password" name="new_password" placeholder="Nova Senha">
            @error('new_password')
            <span>{{ $message }}</span>
            @enderror
            <input type="password" name="new_password_confirmation" placeholder="Confirme a Nova Senha">
            <button type="submit">Redefinir Senha</button>
        </form>
        
        <div class="links">
        <a href="{{ route('index') }}">Voltar ao Login</a>
        </div>
    </div>

    <div class="footer">
        <p>© 2024 Discipulado Verbo da Vida Praia</p>
    </div>
</body>


</html>