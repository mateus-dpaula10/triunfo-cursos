@extends('welcome')

@section('content')
    <h2 class="mb-5">Todas provas</h2>

    @if(session('success')) 
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
    @endif

    @foreach($courses as $course)
        @php
            $exam = $course->exam;
        @endphp

        @if ($exam) 
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <strong>{{ $exam->title }}</strong> — Curso: {{ $course->title }}
                    </div>
                    <div>
                        <form action="{{ route('exams.destroy', $exam->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta prova e todas as perguntas/tentativas associadas?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Excluir Prova</button>
                        </form>
                    </div>
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

                        <form action="{{ route('questions.destroy', $question->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mb-4" onclick="return confirm('Tem certeza que deseja excluir esta pergunta?')">Excluir</button>
                        </form>
                    @endforeach
                    
                    <form action="{{ route('questions.store') }}" method="POST" class="mt-4 border-top pt-3">
                        @csrf
                        <input type="hidden" name="exam_id" value="{{ $exam->id }}">

                        <div class="mb-2">
                            <label>Nova Pergunta:</label>
                            <input type="text" name="text" class="form-control" required>
                        </div>

                        <div class="mb-2">
                            <label>Opções:</label>
                            @for ($i = 0; $i < 4; $i++)
                                <div class="input-group mb-1">
                                    <input type="text" name="options[{{ $i }}][text]" class="form-control" placeholder="Opção {{ $i + 1 }}" required>
                                    <div class="input-group-text">
                                        <input type="radio" name="correct_option" value="{{ $i }}">
                                        <span class="ms-1">Correta</span>
                                    </div>
                                </div>
                            @endfor
                        </div>

                        <button type="submit" class="btn btn-sm btn-success">Adicionar Pergunta</button>
                    </form>
                </div>
            </div>
        @endif
    @endforeach
@endsection