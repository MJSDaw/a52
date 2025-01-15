@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">
                {{ $products['name'] }} ({{$products['price']}}€)
            </h5>
            <p class="card-text">{{$products['description']}}</p>
            <p class="card-text"><small class="text-muted">Añadir a la cesta</small></p>
            </div>
        </div>
        </div>
    </div>
@endsection