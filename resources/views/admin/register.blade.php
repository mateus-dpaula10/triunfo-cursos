@extends('welcome')

@section('content')
    <h2 class="mb-5">Cadastrar novo usuário</h2>

    @if(session('success')) 
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.users.store') }}">
        @csrf

        <div class="form-group">
            <label class="form-label">Nome:</label>
            <input class="form-control" type="text" name="name" required>
        </div>

        <div class="form-group mt-2">
            <label class="form-label">Cpf:</label>
            <input class="form-control" type="text" name="cpf" required>
        </div>

        <div class="form-group mt-2">
            <label class="form-label">Data de nascimento:</label>
            <input class="form-control" type="date" name="birth_date" required>
        </div>

        <div class="form-group mt-2">
            <label class="form-label">Telefone:</label>
            <input class="form-control" type="text" name="phone" required>
        </div>

        <div class="form-group mt-2">
            <label class="form-label">Email:</label>
            <input class="form-control" type="email" name="email" required>
        </div>

        <div class="form-group mt-2">
            <label class="form-label">Senha:</label>
            <input class="form-control" type="password" name="password" required>        
        </div>

        <div class="form-group mt-2">
            <label class="form-label">Tipo de usuário:</label>
            <select class="form-select" name="role">
                <option value="user">Aluno</option>
                <option value="admin">Administrador</option>
            </select>
        </div>

        <button class="btn btn-outline-primary w-100 mt-4" type="submit">Cadastrar</button>
    </form>

    <a href="{{ route('admin.users.all') }}">Visualizar todos os usuários</a>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const alert = document.querySelector('.alert')

            setTimeout(() => {
                alert.style.display = 'none'
            }, 3000)
        })
    </script>
@endpush