@extends('welcome')

@section('content')
    <h2 class="mb-5">Resultado da prova '{{ $exam->title }}'</h2>

    <p>Total de questões: {{ $total }}</p>
    <p>Acertos: {{ $correct }}</p>
    <p>Pontuação: {{ $score }}%</p>

    <a href="{{ route('exams.show', $exam->id) }}" class="btn btn-primary">Ver Prova</a>
    <a href="{{ route('exams.index') }}" class="btn btn-secondary">Voltar</a>
@endsection