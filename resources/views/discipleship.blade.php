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
            <a href={{ route('index') }}><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('index')}}">Home</a></li>
                    <li><a href="{{ route('contato')}}">Contatos</a></li>
                    <li><a href="{{ route('location') }}">Perfil</a></li>
                    <li><a href="{{ route('index')}}">Sair</a></li>
                </ul>
            </nav>
        </header>

        <nav class="filter">
            <select id="categoria">
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
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QxyEVg0Kmww" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="box">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QxyEVg0Kmww" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="box">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/QxyEVg0Kmww" frameborder="0" allowfullscreen></iframe>
            </div>

    </section>
</body>
<script>
    
</script>

</html>
