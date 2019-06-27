@extends('layouts.app')

@section('content')



<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($products as $index => $product)
        <tr>
          <td>
            {{$product->name}}
          </td>
          <td>
            {{$product->value}}
          </td>
          <td>
            {{$product->description}}
          </td>
          <td>
            <a role="button" href="{{ route('editProduct', ['id'=>$product->id]) }}" class="btn btn-primary">Editar</a>
            <a role="button"  href="{{ route('destroyProduct', ['id'=>$product->id]) }}" class="btn btn-danger">Excluir</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a role="button" href="{{ route('createProduct') }}" class="btn btn-success">Novo produto</a>
</div>
@endsection