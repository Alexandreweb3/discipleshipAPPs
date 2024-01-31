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

        <nav class="filter">
            <select id="categoria">
                <option value="todas">Todas as Aulas</option>
                <option value="matematica">Matéria 1</option>
                <option value="Dizimos-e-ofertas">Matéria 2</option>
                <option value="Doutrinas-básicas">Matéria 3</option>
                <option value="Doutrinas-básicas">Matéria 4</option>
                <option value="Doutrinas-básicas">Matéria 5</option>
                <option value="Doutrinas-básicas">Matéria 6</option>
            </select>
        </nav>
        <div class="container-box">
            <div class="box">
                <p>Video</p>
            </div>

            <div class="box">
                <p>Video</p>
            </div>

            <div class="box">
                <p>Video</p>
            </div>

            <div class="box">
                <p>Video</p>
         
    </section>
</body>
<script></script>

</html>
