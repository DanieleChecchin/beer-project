@extends("layouts.app")

@section("content")
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="py-3 fw-bold text-white text-center text-gradient-primary">
                Le nostre Birre
            </h1>
        </div>
        <div class="col-12 text-end mb-4">
            <a href="{{ route('admin.beers.create') }}" class="btn btn-success btn-lg">
                <i class="bi bi-plus-circle"></i> Aggiungi una nuova Birra!
            </a>
        </div>
        <div class="col-10">
            @forelse ($beers as $beer)
                <div class="card mb-4 shadow-lg">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/storage/' . $beer->img) }}" class="card-img-top" alt="{{ $beer->name }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title text-gradient-primary fw-bold">{{ $beer->name }}</h3>
                                <p class="card-text text-muted">{{ $beer->description }}</p>
                                <ul class="list-unstyled">
                                    <li><strong>Tipo:</strong> {{ $beer->type }}</li>
                                    <li><strong>Prezzo:</strong> {{ $beer->price }} €</li>
                                    <li><strong>Gradazione alcolica:</strong> {{ $beer->alcohol_content }}%</li>
                                    <li><strong>Quantità:</strong> {{ $beer->capacity }} cl</li>
                                </ul>
                                <div class="d-flex justify-content-start mt-3">
                                    <a href="{{ route('admin.beers.show', $beer->id) }}" class="btn btn-info me-2">
                                        <i class="bi bi-eye"></i> Mostra
                                    </a>
                                    <a href="{{ route('admin.beers.edit', $beer->id) }}" class="btn btn-warning me-2">
                                        <i class="bi bi-pencil"></i> Modifica
                                    </a>
                                    <form class="d-inline beer-destroyer" action="{{ route('admin.beers.destroy', $beer->id) }}" method="POST" custom-data-name="{{ $beer->name }}"">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i> Cestina
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-warning text-center">
                    <strong>Non ci sono birre disponibili al momento. 😞</strong>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

@section("additional-scripts")
@vite("resources/js/beers/delete-confirmation.js");
@endsection

@section("styles")
<style>
    body {
        background-color: #000;
        color: #fff;
    }
    .card {
        border: none;
        border-radius: 15px;
        background-color: #1a1a1a;
    }
    .card-body ul {
        padding-left: 0;
    }
    .card-body li {
        margin-bottom: 5px;
    }
    .btn i {
        margin-right: 5px;
    }
    img.object-fit-cover {
        object-fit: cover;
    }
    .text-gradient-primary {
        background: linear-gradient(to right, #ff7f50, #ff4500);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .btn-info {
        background-color: #007bff;
        border: none;
    }
    .btn-info:hover {
        background-color: #0056b3;
    }
    .btn-warning {
        background-color: #ffc107;
        border: none;
    }
    .btn-warning:hover {
        background-color: #e0a800;
    }
    .btn-danger {
        background-color: #dc3545;
        border: none;
    }
    .btn-danger:hover {
        background-color: #c82333;
    }
</style>
@endsection
