@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Продукт</th>
                                <th scope="col">Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }} лв.</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan=2></td>
                                <td><b>Общо:</b> {{ Cart::subtotal() }} лв.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{ route('paidSuccessfully') }}" class="btn btn-primary">Платете</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
