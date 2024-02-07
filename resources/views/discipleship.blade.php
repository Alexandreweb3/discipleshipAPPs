<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/discipleship.css') }}">
    <title>Discipulado - Verbo da Vida Praia</title>
</head>

<body>
    <section>
        <header>
            <a href=""><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
            <nav class="navegation">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="contatos.html">Localização</a></li>
                    <li><a href="{{ route('index') }}">Sair</a></li>
                </ul>
            </nav>
        </header>

        <nav class="filter">
            <select id="categoria">
                <option value="todas">Todas as Aulas</option>
                <option value="Integridade-da-Palavra">Integridade da Palavra</option>
                <option value="Arrependimento-de-obras-mortas">Arrependimento de obras mortas</option>
                <option value="Fundamentos-da-Fe">Fundamentos da Fé </option>
                <option value="Imposição-de-mãos">Imposição de mãos </option>
                <option value="Ressurreição-dos-mortos">Ressurreição dos mortos</option>
                <option value="Batismos">Batismos</option>
                <option value="Dízimos-e-ofertas">Dízimos e ofertas</option>
                <option value="Comunhão-com-Deus-e-com-a-Igreja">Comunhão com Deus e com a Igreja</option>
                <option value="Governo-da-Igreja">Governo da Igreja</option>
                <option value="Envolva-se">Envolva-se</option>
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

    </section>
</body>
<script></script>

</html>
