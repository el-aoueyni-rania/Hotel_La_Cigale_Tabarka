@extends('layouts.admin')
@section('main')
<br><br><br>
@if(session('deleteBienetre'))
<div class="alert alert-dismissble alert-success fade show" role="alert">
    {{ session('deleteBienetre') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif
<a href="{{ route('bienetres.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Add new Bienetre</a>
<h3><strong>Bienetre List</strong></h3>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">T.Bienetres</th>
        <th scope="col">Description</th>
        <th scope="col">prix</th>
        <th scope="col">Operation</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($bienetres as $key => $bienetre )
        <tr>
            <th scope="row">{{ $key }}</th>
            <td>{{ $bienetre->Type_de_Bienetres_choisie}}</td>
            <td>{{ $bienetre->Description}}</td>
            <td>{{ $bienetre->prix}}</td>
            <td>
                <a href="{{ route('bienetres.show', ['bienetre' => $bienetre->id]) }}" class="btn btn-info" title="Show details about {{ $bienetre->id.' '.$bienetre->Type_de_bienetres_choisie  }}"><i class="fas fa-user-tag"></i></a>
                <a href="{{  route('bienetres.edit', ['bienetre' => $bienetre->id]) }}" class="btn btn-warning" title="Edit user {{ $bienetre->Type_de_bienetres_choisie }}"><i class="fas fa-user-edit"></i></a>
                <a href="#" class="btn btn-danger" title="Delete bienetre {{ $bienetre->id.' '.$bienetre->Type_de_bienetres_choisie  }}"
                    onclick="event.preventDefault();document.querySelector('#delete-bienetre-form').submit()"><i class="fas fa-user-slash"></i></a>
                <form action="{{  route('bienetres.destroy', ['bienetre' => $bienetre->id]) }}" method="post" id="delete-bienetre-form">@csrf @method('DELETE')</form>
            </td>
        </tr>
        @endforeach
    </tbody>

  </table>
<div class="text-center" style="width=200px">
    {{ $bienetres->links() }}
</div>
@endsection
