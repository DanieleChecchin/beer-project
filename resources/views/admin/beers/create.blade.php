@extends("admin.beers.layouts.create-edit")

@section("form-action")
    {{ route("admin.beers.store") }}
@endsection

@section("form-method")
    @method("POST")
@endsection

@section("form-title")
    create new beer
@endsection
