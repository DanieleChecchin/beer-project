@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Le Birre:
                </h1>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <a href="{{ route("admin.beers.create") }}" class="btn btn-primary btn-lg">
                        Aggiungi una nuova Birra!
                    </a>
                </div>

                @forelse ( $beers as $index => $beer )
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-3">Nome: {{ $beer->name }}</h5>
                            <p class="card-text">Descrizione: {{ $beer->description }}</p>
                            <p class="card-text">Tipo: {{ $beer->type }}</p>
                            <p class="card-text">Prezzo: {{ $beer->price }} € </p>
                            <p class="card-text">Gradazione: {{ $beer->alcohol_content }}</p>
                            <p class="card-text">Quantità: {{ $beer->capacity }} cl</p>

                            <div class="mt-2">
                                <a href="{{ route("admin.beers.show", $beer->id) }}" class="btn btn-sm btn-primary me-2">Show</a>
                                <a href="{{ route("admin.beers.edit", $beer->id) }}" class="btn btn-sm btn-success me-2">Edit</a>
                                <form action="{{ route("admin.beers.destroy", $beer->id) }}" method="POST" class="d-inline project-destroyer" custom-data-name="{{ $beer->name }}">
                                    @csrf
                                    @method("DELETE")

                                    <button type="submit" class="btn btn-sm btn-warning"> Delete </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Non ci sono birre disponibili :( </p>
                @endforelse
            </div>
        </div>
    </div>

@endsection

@section("additional-scripts")
    @vite("resources/js/projects/delete-confirmation.js")
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteModal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');
        const modalMessage = document.getElementById('modal-message');

       
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const propertyId = button.getAttribute('data-id');
            const propertyName = document.getElementById('apartment' + propertyId).innerText;

            modalMessage.innerHTML =
                `<span>Are you sure you want to delete the <b>${propertyName}</b>?</span>`;
            deleteForm.action = `/admin/properties/${propertyId}`;
        });

        
        document.body.style.opacity = 0;
        document.body.style.transition = "opacity 0.5s ease-in-out";
        setTimeout(() => {
            document.body.style.opacity = 1;
        }, 100);
    });
</script>