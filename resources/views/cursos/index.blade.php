@extends('welcome')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2>Todos cursos</h2>
        @if (auth()->user()->role === 'admin')
            <a class="btn btn-primary" href="{{ route('cursos.create') }}">Criar curso</a>
        @endif
    </div>

    @if(session('success')) 
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
    @endif

    @if(session('error')) 
        <p class="alert alert-danger">
            {{ session('error') }}
        </p>
    @endif

    <form method="POST" action="{{ route('cursos.patch') }}">
        @csrf
        @method('PATCH')

        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Pdf</th>
                        <th>Prova</th>
                        <th>Resultado</th>
                        @if(auth()->user()->role === 'admin')
                            <th>Excluir?</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $index => $course)
                        @if(auth()->user()->role === 'user' && auth()->user()->course_id == $course->id || auth()->user()->role === 'admin')
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td>
                                    @if(auth()->user()->role === 'admin')
                                        <input type="text" name="courses[{{ $course->id }}][title]" value="{{ $course->title }}" class="form-control">
                                    @else
                                        {{ $course->title }}
                                    @endif
                                </td>

                                <td>
                                    @if(auth()->user()->role === 'admin')
                                        <input type="text" name="courses[{{ $course->id }}][description]" value="{{ $course->description }}" class="form-control">
                                    @else
                                        {{ $course->description }}
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ asset('storage/' . $course->pdf_path) }}" target="_blank">Baixar PDF</a>
                                </td>

                                <td>       
                                    @php 
                                        $exam = $course->exam;
                                        $attempt = $exam?->attempts->first();
                                        $userIsAdmin = auth()->user()->role === 'admin';
                                        $canAttempt = !$attempt || $attempt->score < 5;
                                    @endphp       
                                    @if ($exam && $canAttempt && !$userIsAdmin)
                                        <a href="{{ route('exams.show', $exam->id) }}" class="btn btn-sm btn-primary">Realizar Prova</a>                                    
                                    @else
                                        <span class="text-muted">Prova não disponível</span>
                                    @endif
                                </td>

                                <td>
                                    @if ($exam && $attempt)
                                        Nota: {{ number_format($attempt->score ?? 0, 2, ',', '.') }}
                                    @else
                                        <span class="text-muted">Não tentou</span>
                                    @endif
                                </td>

                                @if(auth()->user()->role === 'admin')
                                    <td>
                                        <input type="checkbox" name="courses[{{ $course->id }}][delete]" value="1">
                                        <input type="hidden" name="courses[{{ $course->id }}][id]" value="{{ $course->id }}">
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

            @if(auth()->user()->role === 'admin')
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Salvar alterações</button>
                </div>
            @endif
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