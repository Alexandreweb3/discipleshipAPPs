<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.index.css') }}">
    <title>Discipulado - Verbo da Vida Praia</title>
</head>
<body>
    <section>
        <div class="circle">
            <img src="{{ 'storage/imgcirilo.jpg' }}" alt="Imagem pastores">
        </div>
        
        <header>
             <a href="{{ route('index') }}"><img src="{{ 'storage/logoievv.png' }}" alt="." class="logo"></a>
            <nav class="navegation">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('contato') }}">Contato</a></li>
                    <li><a href="{{ route('location') }}">Localização</a></li>
                    <li><a href="{{ route('login.index') }}">Login</a></li>
                </ul>
            </nav>
        </header>
        
        <div class="container">
            <div class="text">
                <h2><br> <span>Discipulado</span></h2>
                <p>Olá! Seja muito bem-vindo à nossa plataforma de aulas, um espaço especialmente desenvolvido para você. Desfrute de todas as oportunidades de crescimento e aprendizado. Junte-se a nós e avancemos juntos!</p>

                @section('content')
                    <a href="{{ route('login.index') }}">Login</a>
                @endsection
            </div>
        </div>
    </section>
    
</body>

</html>
