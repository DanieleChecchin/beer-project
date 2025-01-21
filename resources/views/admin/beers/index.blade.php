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
                            <img src="{{ $beer->image_url ?? asset('images/default-beer.jpg') }}"
                                 alt="Immagine di {{ $beer->name }}"
                                 class="img-fluid rounded-start h-100 object-fit-cover">
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
                                        <i class="bi bi-eye"></i> Show
                                    </a>
                                    <a href="{{ route('admin.beers.edit', $beer->id) }}" class="btn btn-warning me-2">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <button type="button"
                                            class="btn btn-danger btn-delete"
                                            data-id="{{ $beer->id }}"
                                            data-name="{{ $beer->name }}"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
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

<!-- Modal Bootstrap -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare la birra {{ $beer->name }} <span id="beerName" class="fw-bold text-danger"></span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form id="confirmDeleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section("additional-scripts")
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteModal = document.getElementById('deleteModal');
        const beerNameElement = document.getElementById('beerName');
        const confirmDeleteForm = document.getElementById('confirmDeleteForm');

        // Aggiungi evento sui pulsanti di eliminazione
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function () {
                const beerId = button.getAttribute('data-id');
                const beerName = button.getAttribute('data-name');

                // Imposta i dati nel modal
                beerNameElement.textContent = beerName;
                confirmDeleteForm.action = `/admin/beers/${beerId}`;
            });
        });
    });
</script>
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
