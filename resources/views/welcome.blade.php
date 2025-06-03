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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="assets-eja/images/favicon.ico">
</head>
<body>    
    <div id="flex">
        <aside>
            <div class="container py-2">
                <a href="{{ route('cursos.index') }}">
                    <img class="img-fluid" src="{{ asset('img/logotipo.png') }}" alt="Logo triunfo">
                </a>
    
                <ul>
                    <li>
                        <a href="{{ route('cursos.index') }}">Cursos</a>
                    </li>
                    {{-- @if (auth()->user()->role === 'admin')
                        <li>
                            <a href="{{ route('exams.create') }}">Provas</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users.create') }}">Gestão de usuários</a>
                        </li>
                    @endif --}}
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                    </li>

                    <form method="POST" action="{{ route('login.logout') }}" id="logout-form">
                        @csrf
                    </form>
                </ul>
            </div>
        </aside>
    
        <main>
            <div style="width: 100%; background-color: #ed6412; color: #FFF; padding: .5rem">
                <marquee behavior="scroll" direction="left">
                    <h6 class="mb-0" style="font-weight: 300">Usuário logado: {{ auth()->check() ? auth()->user()->name : '' }}</h6>
                </marquee>
            </div>
            <div class="container py-2 py-lg-5">
                @yield('content')            
            </div>
        </main>
    </div>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
    @stack('scripts')
</body>
</html>