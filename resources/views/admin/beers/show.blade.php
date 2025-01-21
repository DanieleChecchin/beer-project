@extends('layouts.app')

@section('content')

<div class="container bg-black">
    <div class="row bg-black">
        <div class="col-12">
            <h1 class="text-center text-white mt-5">La nostra {{ $beer->name }} </h1>
        </div>

        <div class="card bg-black">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="immagine-birra  bg-black">
                <img class="img-birra-es text-center  bg-black" src="https://c8.alamy.com/compit/2j9m3h1/birra-con-luppolo-e-orzo-su-sfondo-nero-2j9m3h1.jpg" alt="">
            </div>
            <div class="card-body bg-black">
              <p class="card-text text-white bg-black text-center"> {{ $beer->description }} </p>
            </div>
            {{-- <ul class="list-group list-group-flush bg-black d-flex card text-center">
              <li class="list-group-item text-white bg-black"> Tipologia: {{ $beer->type }}</li>
              <li class="list-group-item text-white bg-black"> Gradazione alcolica: {{ $beer->alcohol_content }} %</li>
              <li class="list-group-item text-white bg-black"> Capienza: {{ $beer->capacity }} cl</li>
              <li class="list-group-item text-white bg-black"> Prezzo: {{ $beer->price }} €</li>
            </ul> --}}
            <div class="bg-black d-flex justify-content-around mt-5">
                <div class="text-white bg-black text-center card-custom">Tipologia:<br> {{ $beer->type }}</div>
                <div class="text-white bg-black text-center card-custom">Gradazione:<br> {{ $beer->alcohol_content }} %</div>
                <div class="text-white bg-black text-center card-custom">Quantità:<br> {{ $beer->capacity }} cl</div>
                <div class="text-white bg-black text-center card-custom">Prezzo:<br> {{ $beer->price }} €</div>
            </div>
        </div>
    </div>
</div>

<style>
    body{
        background-color: #000;
    }
    .immagine-birra{
        height: 500px;
        text-align: center;
    }
    .img-birra-es{
    height: 100%;
    }
    .card-custom{
        border: 1px solid darkgray;
        border-radius: 25px;
        height: 120px;
        width: 120px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

@endsection

