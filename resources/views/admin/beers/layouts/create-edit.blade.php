@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="@yield("form-action")" method="POST" enctype="multipart/form-data">
                @yield("form-method")
                @csrf

                <div class="mb-3">
                    <h1 class="text-center fw-bold">
                        @yield("form-title")
                    </h1>
                </div>

                <div class="mb-3">
                    <label for="beer-name" class="form-label text-white">beer name:</label>
                    <input type="text" name="name" id="beer-name" class="form-control bg-dark text-white border-black" value="{{ old("name", $beer->name) }}">
                    {{-- @error("name")
                        @include("partials.single-name-error-message")
                    @enderror --}}
                </div>
                <div class="mb-3">
                    <label for="beer-description" class="form-label text-white">beer description:</label>
                    <input type="text" name="description" id="beer-description" class="form-control bg-dark text-white border-black" value="{{ old("description", $beer->description) }}">
                    {{-- @error("name")
                        @include("partials.single-name-error-message")
                    @enderror --}}
                </div>
                <div class="mb-3">
                    <label for="beer-type" class="form-label text-white">beer type:</label>
                    <input type="text" name="type" id="beer-type" class="form-control bg-dark text-white border-black" value="{{ old("type", $beer->type) }}">
                    {{-- @error("name")
                        @include("partials.single-name-error-message")
                    @enderror --}}
                </div>
                <div class="mb-3">
                    <label for="beer-price" class="form-label text-white">beer price:</label>
                    <input type="text" name="price" id="beer-price" class="form-control bg-dark text-white border-black" value="{{ old("price", $beer->price) }}">
                    {{-- @error("name")
                        @include("partials.single-name-error-message")
                    @enderror --}}
                </div>
                <div class="mb-3">
                    <label for="beer-alcohol_content" class="form-label text-white">beer alcohol_content:</label>
                    <input type="text" name="alcohol_content" id="beer-alcohol_content" class="form-control bg-dark text-white border-black" value="{{ old("alcohol_content", $beer->alcohol_content) }}">
                    {{-- @error("name")
                        @include("partials.single-name-error-message")
                    @enderror --}}
                </div>
                <div class="mb-3">
                    <label for="beer-capacity" class="form-label text-white">beer capacity:</label>
                    <input type="text" name="capacity" id="beer-capacity" class="form-control bg-dark text-white border-black" value="{{ old("capacity", $beer->capacity) }}">
                    {{-- @error("name")
                        @include("partials.single-name-error-message")
                    @enderror --}}
                </div>



                {{-- <div class="mb-3">
                    <input type="file" name="image" id="post-image" class="form-control">

                    @error("image")
                        @include("partials.single-name-error-message")
                    @enderror
                </div> --}}

                <button type="submit" class="btn btn-lg btn-primary">@yield("form-title")</button>
                <button type="reset" class="btn btn-lg btn-warning">Reset fields</button>
            </form>
        </div>
    </div>
</div>
@endsection
