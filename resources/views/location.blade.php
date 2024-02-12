<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Discipulado - Verbo da Vida</title>
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
            align-items: flex-start;
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

        .container {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container .text {
            position: relative;
            max-width: 600px;
            margin-right: 20px;
        }

        .container .text h2 {
            color: #fff;
            font-size: 2em;
            margin-bottom: 10px;
            line-height: 2.5em;
            font-weight: 700;
        }

        .container .text h2 span {
            font-size: 2.5em;
            color: #FCDC13;
        }

        .container .text p {
            color: #fff;
        }

        .container .text a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background: #0D4DC7;
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            letter-spacing: 1px;
            border: 40px;
            transition: 0.3s ease-in-out;
        }

        .container .text a:hover {
            transform: translate(-10px);
        }

        .formcontact {
            align-items: left;
        }

        /* Estilos para telas menores */
        .menu-toggle {
            display: block;
            font-size: 20px;
            cursor: pointer;
            order: 1;
        }

        .navegation {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 70px;
            left: 0;
            background-color: #121212;
            width: 100%;
            text-align: center;
        }

        .navegation.show {
            display: flex;
        }

        .navegation a {
            display: block;
            padding: 15px;
            margin: 0;
            color: #FCDC13;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
        }

        @media only screen and (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .navegation {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                background-color: #121212;
                width: 100%;
                text-align: center;
            }

            .navegation.show {
                display: flex;
            }

            .navegation a {
                display: block;
                padding: 15px;
                margin: 0;
                color: #FCDC13;
                text-decoration: none;
                font-weight: 500;
                font-size: 16px;
            }
        }

        @media only screen and (min-width: 768px) {
            .menu-toggle {
                display: none;
            }

            .navegation {
                display: flex;
                flex-direction: row;
                position: static;
                background-color: transparent;
                width: auto;
            }

            .navegation a {
                padding: 0 20px;
            }

        }

        .containerlocation {
            color: #fff;
            align-items: right;
            text-align: right;
        }

        .containerlocation h1 {
            text-align: center;
            margin-left: 15px;

        }

        .containertime {
            color: #fff;
            align-items: center;
            text-align: left;
        }

        .half-left {
            width: 50%;
            box-sizing: border-box;
            padding: 20px;
            text-align: center;
            border: none;
            color: #fff;
        }

        .elements-left {
            text-align: center;
        }

        .half-right {
            width: 50%;
            /* Ocupa 50% da largura da tela */
            box-sizing: border-box;
            padding: 20px;
            text-align: center;
            /* Alinha o conteúdo ao centro */
        }
    </style>
</head>

<body>
    <section>
        <header>
            <a href={{ route('index') }}><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href={{ route('index') }}>Home</a></li>
                    <li><a href="{{ route('contato') }}">Contatos</a></li>
                    <li><a href={{ route('location') }}>Localização</a></li>
                    <li><a href="{{ route('login.index') }}">Login</a></li>
                </ul>
            </nav>
        </header>
        <div class="half-left">
            <div class="elements-left">
                <h1>NOSSA LOCALIZAÇÃO</h1>
                <br>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15802.36349095657!2d-34.83947299318902!3d-7.090866147687016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd0c649271d9%3A0x677e64d27ff09b8a!2sIgreja%20Verbo%20da%20Vida%20-%20Praia!5e0!3m2!1sen!2sbr!4v1644703156180!5m2!1sen!2sbr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
                <p>R. Herberto Pereira de Lucena, 241<br>Jardim Oceania, João Pessoa - PB, 58037-235</p>
                <br>
                <h1>Horário dos nossos cultos</h1>
                <p>- Domingo: 16:00 - 18:00</p>
                <p>- Terça: 16:00 - 18:00</p>
                <p>- Sábado: 20:00 </p>
            </div>
            <div class="half-right">

            </div>
        </div>
    </section>
</body>


</html>
