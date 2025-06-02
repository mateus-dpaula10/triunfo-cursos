@extends('welcome')

@section('content')
    <h2 class="mb-5">Cadastrar novo curso</h2>

    @if(session('success')) 
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
    @endif

    <form method="POST" action="{{ route('cursos.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title" class="form-label">Título do curso</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
        </div>

        <div class="form-group mt-3">
            <label for="description" class="form-label">Descrição do curso</label>
            <textarea name="description" id="description" class="form-control" rows="5">{{ old('description') }}</textarea>
        </div>

        <div class="form-group mt-3">
            <label for="pdf_path">Apostila (PDF)</label>
            <input type="file" name="pdf_path" id="pdf_path" class="form-control" required accept="application/pdf">
        </div>

        <button type="submit" class="btn btn-outline-primary w-100 mt-4">Cadastrar</button>
    </form>

    <a href="{{ route('cursos.index') }}">Visualizar todos os cursos</a>
@endsection