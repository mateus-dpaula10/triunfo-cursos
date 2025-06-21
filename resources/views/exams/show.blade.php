@extends('welcome')

@section('content')
    <h2 class="mb-5">Realizar prova '{{ $exam->title }}'</h2>

    @if(session('error')) 
        <p class="alert alert-danger">
            {{ session('error') }}
        </p>
    @endif

    <p>Tentativas feitas: {{ \App\Models\ExamAttempt::where('user_id', auth()->id())->where('exam_id', $exam->id)->count() }} de 3</p>

    <div class="alert alert-info" id="timer-display">
        Tempo restante: <span id="time-left">--:--</span>
    </div>

    <form id="exam-form" method="POST" action="{{ route('exams.submit', $exam->id) }}">
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const formId = 'exam-{{ $exam->id }}'
            const form = document.getElementById('exam-form')
            const storageKey = `exam_answers_${formId}`
            const examKey = `exam_timer_${formId}`
            const timeLeftDisplay = document.getElementById('time-left')
            const totalTime = 2 * 60 * 60 * 1000

            const savedAnswers = JSON.parse(localStorage.getItem(storageKey) || '{}')
            for (const [questionId, optionId] of Object.entries(savedAnswers)) {
                const input = document.querySelector(`input[name="answers[${questionId}]"][value="${optionId}"]`)
                if (input) input.checked = true
            }

            document.querySelectorAll('input[type="radio"]').forEach(input => {
                input.addEventListener('change', () => {
                    const questionId = input.name.match(/\d+/)[0]
                    const optionId = input.value

                    const currentAnswers = JSON.parse(localStorage.getItem(storageKey) || '{}')
                    currentAnswers[questionId] = optionId
                    localStorage.setItem(storageKey, JSON.stringify(currentAnswers))
                })
            })

            function startTimer() {
                let endTime = localStorage.getItem(examKey)

                if (!endTime) {
                    endTime = Date.now() + totalTime
                    localStorage.setItem(examKey, endTime)
                } else {
                    endTime = parseInt(endTime)
                }

                const interval = setInterval(() => {
                    const now = Date.now()
                    const remaining = endTime - now

                    if (remaining <= 0) {
                        clearInterval(interval)
                        localStorage.removeItem(examKey)
                        localStorage.removeItem(storageKey)
                        form.submit()
                        return
                    }

                    const minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60))
                    const seconds = Math.floor((remaining % (1000 * 60)) / 1000)

                    timeLeftDisplay.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`
                }, 1000)
            }

            startTimer()

            form.addEventListener('submit', () => {
                localStorage.removeItem(storageKey)
                localStorage.removeItem(examKey)
            })
        })
    </script>
@endpush