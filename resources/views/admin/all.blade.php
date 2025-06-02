@extends('welcome')

@section('content')
    <h2 class="mb-5">Todos usuários</h2>

    @if(session('success')) 
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
    @endif

    <form method="POST" action="{{ route('admin.users.patch') }}">
        @csrf
        @method('PATCH')

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Senha</th>
                        <th>Telefone</th>
                        <th>Cpf</th>
                        <th>Função</th>
                        <th>Descrição</th>
                        <th>Excluir?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <input type="text" name="users[{{ $user->id }}][name]" value="{{ $user->name }}" class="form-control">
                            </td>
                            <td>
                                <input type="password" name="users[{{ $user->id }}][password]" value="{{ $user->password }}" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="users[{{ $user->id }}][phone]" value="{{ $user->phone }}" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="users[{{ $user->id }}][cpf]" value="{{ $user->cpf }}" class="form-control">
                            </td>
                            <td>
                                <select name="users[{{ $user->id }}][role]" class="form-select">
                                    <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Usuário</option>
                                    <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrador</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="users[{{ $user->id }}][description]" value="{{ $user->description }}" class="form-control">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="users[{{ $user->id }}][delete]" value="1">
                            </td>
                            <input type="hidden" name="users[{{ $user->id }}][id]" value="{{ $user->id }}">
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Salvar alterações</button>
            </div>
        </div>
    </form>
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