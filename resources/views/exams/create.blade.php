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

        <div id="questions-container">

        </div>

        <button type="button" class="btn btn-secondary w-100 mt-3" onclick="addQuestion()">+ Adicionar Pergunta</button>
        <button type="submit" class="btn btn-outline-primary w-100 mt-4">Cadastrar</button>
    </form>

    <a href="{{ route('exams.index') }}">Visualizar todas as provas</a>
@endsection

@push('scripts')
    <script>    
        let questionIndex = 0

        function addQuestion() {
            const container = document.getElementById('questions-container')
            
            const questionHtml = `
                <div class="border p-3 mb-3 question-item" id="question-${questionIndex}">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <label class="mb-0">Pergunta ${questionIndex + 1}</label>
                        <button type="button" class="btn btn-sm btn-danger" onclick="removeQuestion(${questionIndex})">
                            Remover
                        </button>
                    </div>

                    <input type="text" name="questions[${questionIndex}][text]" class="form-control mb-3" required>

                    <label>Alternativas</label>
                    ${[0,1,2,3].map(j => `
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="questions[${questionIndex}][correct]" value="${j}" required>
                            <input type="text" name="questions[${questionIndex}][options][${j}]" class="form-control d-inline w-75" placeholder="Alternativa ${String.fromCharCode(65 + j)}" required>
                        </div>
                    `).join('')}
                </div>
            `

            container.insertAdjacentHTML('beforeend', questionHtml)
            questionIndex++
        }

        function removeQuestion(index) {
            const el = document.getElementById(`question-${index}`)
            if (el) el.remove()
        }
    
        document.addEventListener('DOMContentLoaded', () => {
            const alert = document.querySelector('.alert')

            if (alert) {
                setTimeout(() => {
                    alert.style.display = 'none'
                }, 3000)           
            }

            addQuestion()
        })
    </script>
@endpush