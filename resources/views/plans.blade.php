@extends('layout')

@section('content')
<a class="btn btn-primary" href="/homepage" role="button"> Ritorna alla HomePage </a> <!-- Bottone ritorna alla HomePage-->
<div class="row">
    @foreach($plans as $plan)
    <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;"> <!--Definizione delle "carte" -->
        <div class="img_tumbnail productlist">
            <img src="{{ asset('images') }}/{{ $plan->immagine}}" class="img-fluid">

            <div class="caption">
                <h4>{{$plan->nome}}</h4>
                <p> {{$plan->tipologia}}</p>
                <p> {{$plan->descrizione}}</p>
                <p><strong> Prezzo:</strong>€ {{$plan->prezzo}}</p>
                <p> <i>Durata: {{$plan->durata}} ore</i></p>
                <p> <i>Distanza: {{$plan->distanza}} Km</i></p>
                <p> <i>Altitudine: {{$plan->altitudine}} m </i></p>
                <p class="btn-holder"><a href="{{ route('add_to_cart', $plan->id)}}" class="btn btn-primary btn-block text-center" role="button">Aggiungi al carrello</a></p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<a class="btn btn-primary" href="/shop" role="button"> Ritorno all'indice della pagina </a> <br>

@endsection