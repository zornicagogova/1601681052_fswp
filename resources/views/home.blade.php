@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @auth
            @if(Auth::user()->role == 1)
                <div class="col-4 mb-4">
                    <a href="{{ route('createProduct') }}" class="card bg-success w-100 h-100">
                        <div class="card-body text-white d-flex align-content-center justify-content-center flex-wrap">
                            <h4 class="text-center">Добави продукт</h4>
                        </div>
                    </a>
                </div>
            @endif
        @endauth

        @foreach($products as $product)
            <div class="col-4 mb-4">
                <div class="card w-100 h-100">
                    <div class="card-img-top">
                        <img src="{{ url('img/' . $product->id . '.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4>{{ $product->name }}</h4> <br>
                        <h5>
                            {{ number_format($product->price, 2) }} лв.
                        </h5>
                        <a href="{{ route('add', [ $product->getRouteKey() ]) }}">
                            <button class="btn btn-primary">Добави в количката</button>
                        </a>
                        @auth
                            @if(Auth::user()->role == 1)
                                <a href="{{ route('editProduct', [$product->id]) }}" class="btn btn-primary">Промяна</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteProductModal">&times;</button>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteProductModalTitle">Да изтрием ли продукта?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">
                            Избраният продукт „{{ $product->name }}“ ще бъде безвъзвратно изтрит. Сигурни ли сте, че искате да осъществим това действие?
                        </div>

                        <div class="modal-footer">
                            <a href="{{ route('deleteProduct', [$product->id]) }}" class="btn btn-danger">Да, изтрий</a>
                            <button data-dismiss="modal" class="btn btn-primary">Не, не изтривай</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
