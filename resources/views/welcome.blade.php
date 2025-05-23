<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triunfo Cursos Preparatórios</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>    
    <div id="flex">
        <aside>
            <div class="container py-2">
                <a href="{{ route('home.index') }}">
                    <img class="img-fluid" src="{{ asset('img/logotipo.png') }}" alt="Logo triunfo">
                </a>
    
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li>
                        <a href="">Provas</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.create') }}">Cadastrar aluno</a>
                    </li>
                    <li>
                        <a href="">Sair</a>
                    </li>
                </ul>
            </div>
        </aside>
    
        <main>
            <div class="container py-2 py-lg-5">
                @yield('content')            
            </div>
        </main>
    </div>

    @stack('scripts')

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>