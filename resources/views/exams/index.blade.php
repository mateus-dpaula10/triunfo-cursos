@extends('welcome')

@section('content')
    <h2 class="mb-5">Todas provas</h2>

    @if(session('success')) 
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
    @endif

    @foreach($exams as $exam)
        <div class="card mb-4">
            <div class="card-header">
                <strong>{{ $exam->title }}</strong> — Curso: {{ $exam->course->title ?? 'N/A' }}
            </div>
            <div class="card-body">
                @foreach($exam->questions as $question)
                    <form action="{{ route('questions.update', $question->id) }}" method="POST" class="mb-4">
                        @csrf
                        @method('PATCH')

                        <div class="mb-2">
                            <label>Pergunta:</label>
                            <input type="text" name="text" class="form-control" value="{{ $question->text }}">
                        </div>

                        <div class="mb-2">
                            <label>Respostas:</label>
                            @foreach($question->options as $option)
                                <div class="input-group mb-1">
                                    <input type="text" name="options[{{ $option->id }}][text]" class="form-control" value="{{ $option->text }}">
                                    <div class="input-group-text">
                                        <input type="radio" name="correct_option_id" value="{{ $option->id }}" {{ $option->is_correct ? 'checked' : '' }}>
                                        <span class="ms-1">Correta</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Salvar alterações</button>
                    </form>
                @endforeach
            </div>
        </div>
    @endforeach

@endsection