<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" 
        crossorigin="anonymous">
    <link rel="shortcut icon" href="assets-eja/images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}">
</head>
<body>
    <div id="block">
        <div>

        </div>

        <form method="POST" action="{{ route('login.auth') }}">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h3>Login</h3>
            
            <div class="form-group mt-5">
                <label for="cpf" class="form-label">Cpf</label>
                <input type="text" class="form-control" name="cpf" id="cpf" required>
            </div>
            
            <div class="form-group mt-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <button class="btn btn-outline-primary mt-3 w-100" type="submit">Entrar</button>
        </form>
    </div>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const alert = document.querySelector('.alert')

            setTimeout(() => {
                alert.style.display = 'none'
            }, 3000)
        })
    </script>
</body>
</html>