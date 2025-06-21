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
                        <th>Curso</th>
                        <th>Nota</th>
                        <th>Tentativas</th>
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
                                <input type="text" name="users[{{ $user->id }}][phone]" value="{{ $user->phone }}" class="form-control phone-mask">
                            </td>
                            <td>
                                <input type="text" name="users[{{ $user->id }}][cpf]" value="{{ $user->cpf }}" class="form-control cpf-mask">
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
                            <td>
                                <select name="users[{{ $user->id }}][course_id]" class="form-select">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" {{ $user->course_id == $course->id ? 'selected' : '' }}>
                                            {{ $course->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                @php
                                    $latestAttempt = $user->examAttempts->sortByDesc('created_at')->first();
                                @endphp

                                @if ($latestAttempt)
                                    <div><strong>Prova:</strong> {{ $latestAttempt->exam->title ?? '---' }}</div>
                                    <div><strong>Nota:</strong> {{ $latestAttempt->score }}/10</div>
                                    <div><strong>Data:</strong> {{ $latestAttempt->created_at->format('d/m/Y H:i') }}</div>
                                    <div><strong>Tentativas:</strong> {{ $user->examAttempts->where('exam_id', $latestAttempt->exam_id)->count() }}</div>
                                @else
                                    <em>Sem tentativas</em>
                                @endif
                            </td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-warning" onclick="resetAttempts({{ $user->id }})">Resetar Tentativas</button>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>        
        document.addEventListener('DOMContentLoaded', () => {
            const alert = document.querySelector('.alert')

            setTimeout(() => {
                alert.style.display = 'none'
            }, 3000)  

            $('.phone-mask').mask('(00) 00000-0000')
            $('.cpf-mask').mask('000.000.000-00')
        })

        function resetAttempts(userId) {
            if (!confirm('Tem certeza que desejar resetar as tentativas deste usuário?')) return

            fetch(`/admin/users/${userId}/reset-attempts`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    alert('Tentativas resetadas com sucesso!');
                    location.reload();
                } else {
                    alert('Erro ao resetar tentativas.');
                }
            });
        }
    </script>
@endpush