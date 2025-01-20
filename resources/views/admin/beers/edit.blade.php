@extends("admin.beers.layouts.create-edit")

@section("form-action")
    {{ route("admin.beers.update", $beer) }}
@endsection

@section("form-method")
    @method("PUT")
@endsection

@section("form-title")
    Updating {{ $beer->name }}
@endsection
