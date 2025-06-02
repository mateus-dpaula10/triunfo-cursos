@extends('welcome')

@section('content')
    <h2 class="mb-5">Todos cursos</h2>

    @if(session('success')) 
        <p class="alert alert-success">
            {{ session('success') }}
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
                        <th>Excluir?</th>
                        <th>Prova</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $index => $course)
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
                                @if(auth()->user()->role === 'admin')
                                    <input type="checkbox" name="courses[{{ $course->id }}][delete]" value="1">
                                    <input type="hidden" name="courses[{{ $course->id }}][id]" value="{{ $course->id }}">
                                @endif
                            </td>

                            <td>
                                @if(auth()->user()->role === 'user' && auth()->user()->course_id == $course->id)
                                    <a href="{{ route('exams.show', $course->exam->id) }}" class="btn btn-sm btn-primary">Realizar Prova</a>
                                @endif
                            </td>
                        </tr>
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