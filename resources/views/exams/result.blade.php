@extends('welcome')

@section('content')
    <h2 class="mb-5">Resultado da prova '{{ $exam->title }}'</h2>

    <p>
        <strong>Nota:</strong> 
        {{ number_format($attempt->score ?? 0, 2, ',', '.') }} - 
        {{ ($attempt->score ?? 0) >= 5 ? 'Aprovado' : 'Reprovado' }}
    </p>
    <p>
        <strong>Data:</strong> 
        {{ $attempt->created_at->format('d/m/Y H:i') }}
    </p>

    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Voltar</a>
@endsection