@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mt-5">Beer: {{ $beer->name }} </h1>
        </div>

        <div class="card">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <h5 class="card-title">  {{ $beer->name }} </h5>
              <p class="card-text"> {{ $beer->description }} </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"> Tipologia: {{ $beer->type }}</li>
              <li class="list-group-item"> Gradazione alcolica: {{ $beer->alcohol_content }}</li>
              <li class="list-group-item"> Capienza: {{ $beer->capacity }}</li>
              <li class="list-group-item"> Prezzo: {{ $beer->price }}</li>
            </ul>
            
          </div>
    </div>
</div>