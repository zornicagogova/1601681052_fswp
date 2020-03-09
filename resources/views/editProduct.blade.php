@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('updateProduct') }}" enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="productId" value="{{ $product->id }}" />
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <h2>Промяна на снимката на продукта</h2>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="custom-file">
                            <input type="file" name="productImageFile" class="custom-file-input" accept="image/png" id="productImageFile" aria-describedby="inputGroupFileAddon01" onchange="fileChange()">
                            <label class="custom-file-label" for="productImageFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card w-75">
                            <img src="{{ url('img/' . $product->id . '.png') }}" class="card-img-top" id="productImage" />
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <h2>Промяна на данни за продукта</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <input class="form-control form-control-lg" type="text" name="productName" placeholder="Име на продукта" value="{{ $product->name }}">
                            </div>
                
                            <div class="form-group row">
                                <input class="form-control form-control-lg" type="number" step="0.01" name="productPrice" placeholder="Цена" value="{{ (float) $product->price }}">
                            </div>

                            <div class="row">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Обнови</button>
                            </div>
                        </div>
                    </div>                
                </div>
        </div>
    </form>
</div>
@endsection
