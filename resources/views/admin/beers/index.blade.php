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
                                    <button class="btn btn-danger delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $beer->id }}" data-name="{{ $beer->name }}">
                                        <i class="bi bi-trash"></i> Cestina
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

<!-- Modal di Conferma Eliminazione -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare <strong id="beer-name"></strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form id="delete-form" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section("additional-scripts")
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const deleteModal = document.getElementById("deleteModal");
        deleteModal.addEventListener("show.bs.modal", function (event) {
            const button = event.relatedTarget;
            const beerId = button.getAttribute("data-id");
            const beerName = button.getAttribute("data-name");
            
            document.getElementById("beer-name").textContent = beerName;
            document.getElementById("delete-form").action = `/admin/beers/${beerId}`;
        });
    });
</script>
@endsection
