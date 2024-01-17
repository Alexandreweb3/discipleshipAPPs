<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/discipleship.css') }}">
    <title>Discipulado - Verbo da Vida</title>
</head>

<body>
    <section>

        <header>
            <a href="index.html"><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
            <nav class="navegation">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contatos.html">Localização</a></li>
                    <li><a href="{{ route('login.logout') }}">Sair</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="container-box">
                <div class="box">

                </div>

                <div class="box">

                </div>

                <div class="box">

                </div>

                <div class="box">

                </div>

                <div class="box">
                </div>
                <div class="box">
                </div>

                <div class="box">
                </div>

                <div class="box">
                </div>

                <div class="box">
                </div>

                <div class="box">
                </div>

                <div class="box">
                </div>

                <div class="box">
                </div>

                <div class="box">

                </div>
            </div>
        </section>
    </section>
    <script>
        function toggleMenu() {
            var navigation = document.querySelector('.navegation');
            navigation.classList.toggle('show');
        }
    </script>
</body>
<script></script>

</html>
