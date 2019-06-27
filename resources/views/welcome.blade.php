@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 col-lg-4">
                <div class="card mt-3 mb-3" style="width: 18rem; height: 25rem">
                    <img src="images/{{$product->image}}" class="card-img-top" style="height: 150px; width: 100%" alt="olokinho">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <div class="card-text">
                            <p><b>Valor:</b> R${{$product->value}}</p>
                            <p><b>Categoria:</b> {{$product->categorie_id}}</p>
                            <p><b>Descrição do produto:</b> {{$product->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection