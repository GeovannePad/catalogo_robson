@extends('layouts.app')

@section('content')
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>
              {{$category->name}}
            </td>
            <td>
              <a role="button" href="{{ route('editCategory', ['id'=>$category->id]) }}" class="btn btn-primary">Editar</a>
              <a role="button" href="{{ route('editCategory', ['id'=>$category->id]) }}" class="btn btn-danger">Excluir</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <a role="button" href="{{ route('createCategory') }}" class="btn btn-success">Nova categoria</a>
  </div>
@endsection