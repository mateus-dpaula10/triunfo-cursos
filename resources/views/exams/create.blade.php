@extends('welcome')

@section('content')
    <h2 class="mb-5">Cadastrar nova prova</h2>

    @if(session('success')) 
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
    @endif

    <form method="POST" action="{{ route('exams.store') }}">
        @csrf

        <div class="form-group">
            <label for="course_id" class="form-label">Curso</label>
            <select name="course_id" id="course_id" class="form-select" required>
                @foreach ($courses as $course) 
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="title">Título da prova</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <h5 class="mt-5 mb-3">Questões</h5>

        @for ($i = 0; $i < 1; $i++)
            <div class="border p-3 mb-3">
                <div class="mb-2">
                    <label>Pergunta {{ $i + 1 }}</label>
                    <input type="text" name="questions[{{ $i }}][text]" class="form-control" required>
                </div>

                <label>Alternativas</label>
                @for ($j = 0; $j < 4; $j++) 
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="questions[{{ $i }}][correct]" value="{{ $j }}" required>
                        <input type="text" name="questions[{{ $i }}][options][{{ $j }}]" class="form-control d-inline w-75" placeholder="Alternativa {{ chr(65 + $j) }}" required>
                    </div>
                @endfor
            </div>
        @endfor

        <button type="submit" class="btn btn-outline-primary w-100 mt-4">Cadastrar</button>
    </form>

    <a href="{{ route('exams.index') }}">Visualizar todas as provas</a>
@endsection