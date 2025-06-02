@extends('welcome')

@section('content')
    <h2 class="mb-5">Realizar prova '{{ $exam->title }}'</h2>

    <p>Tentativas feitas: {{ \App\Models\ExamAttempt::where('user_id', auth()->id())->where('exam_id', $exam->id)->count() }} de 3</p>

    <form method="POST" action="{{ route('exams.submit', $exam->id) }}">
        @csrf

        @foreach ($exam->questions as $index => $question)
            <div class="card mb-3">
                <div class="card-header">
                    <strong>Questão {{ $index + 1 }}:</strong> {{ $question->text }}
                </div>
                <div class="card-body">
                    @foreach ($question->options as $option)
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="answers[{{ $question->id }}]"
                                id="option-{{ $option->id }}"
                                value="{{ $option->id }}"
                                required
                            >
                            <label class="form-check-label" for="option-{{ $option->id }}">
                                {{ $option->text }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Enviar Respostas</button>
    </form>
@endsection