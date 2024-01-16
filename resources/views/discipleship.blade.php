<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Discipulado - Verbo da Vida</title>
</head>

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
        background: #0D4DC7;
        clip-path: circle(50% at bottom right);
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 40px 20px; /* Ajustei o padding para tornar mais compacto */
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
        color: #FCDC13;
        font-weight: 500;
        text-decoration: none;
        font-size: 16px;
        margin-left: 20px;
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
    
</style>

<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="index.html"><img src="logoievv.png" alt="." class="logo"></a>
            <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
            <nav class="navegation">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contatos.html">Localização</a></li>
                    <li><a href="{{ route('login.logout') }}">Sair</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <div class="text">
                <h2><br> <span>{{ auth()->user()->name }} </span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi esse similique dolorum, pariatur, voluptatibus magni dignissimos maiores accusantium eligendi, commodi quaerat eveniet! Consequatur, minima? Voluptas facilis natus provident aliquam? Quisquam?</p>

                @section('content')
                <a href="{{ route('login.index') }}">Login</a>
                @endsection
            </div>
        </div>
    </section>
    <script>
        function toggleMenu() {
            var navigation = document.querySelector('.navegation');
            navigation.classList.toggle('show');
        }
    </script>
</body>
<script>
</script>

</html>
