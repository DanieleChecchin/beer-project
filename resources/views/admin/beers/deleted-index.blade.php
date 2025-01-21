@extends("layouts.app")

@section("content")
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="py-3 fw-bold text-center text-primary">
                Cestino
            </h1>
        </div>
        <div class="col-10">
            @forelse ($beers as $beer)
                <div class="card mb-4 shadow-lg">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $beer->image_url ?? asset('images/default-beer.jpg') }}"
                                 alt="Immagine di {{ $beer->name }}"
                                 class="img-fluid rounded-start h-100 object-fit-cover">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title text-primary fw-bold">{{ $beer->name }}</h3>
                                <p class="card-text text-muted">{{ $beer->description }}</p>
                                <ul class="list-unstyled">
                                    <li><strong>Tipo:</strong> {{ $beer->type }}</li>
                                    <li><strong>Prezzo:</strong> {{ $beer->price }} €</li>
                                    <li><strong>Gradazione alcolica:</strong> {{ $beer->alcohol_content }}%</li>
                                    <li><strong>Quantità:</strong> {{ $beer->capacity }} cl</li>
                                </ul>
                                <div class="d-flex justify-content-start mt-3">
                                    
                                    <!-- Restore -->
                                    <form class="d-inline" action=" {{ route('beer.restore', $beer->id) }} " method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <button type="submit" class="btn btn-success me-2">
                                            <i class="bi bi-trash"></i> Ripristina
                                        </button>
                                    </form>

                                    <!-- Permanent delete -->
                                    <form class="d-inline beer-destroyer" action=" {{ route('beer.permanent-delete', $beer->id) }} " method="POST" custom-data-name="{{ $beer->name }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i> Elimina del tutto
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
    .card {
        border: none;
        border-radius: 15px;
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
</style>
@endsection
