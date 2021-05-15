@extends('layouts.admin')
@section('main')
<h3>Bienetre List</h3>
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
                <a href="{{ route('bienetres.show', [Bienetre => $bienetre->id]) }}" class="btn btn-info" title="Show details about {{ $bienetre->id.' '.$bienetre->Type_de_Bienetres_choisie  }}"><i class="fas fa-user-tag"></i>>show</a>
                <a href="#" class="btn btn-warning" title="Edit user {{ $bienetre->Type_de_Bienetres_choisie }}"><i class="fas fa-user-edit"></i>>Edit</a>
                <a href="#" class="btn btn-danger" title="Delete user {{ $bienetre->id.' '.$bienetre->Type_de_Bienetres_choisie  }}"><i class="fas fa-user-slash"></i>>Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

  </table>
<div class="text-center" style="width=200px">
    {{ $bienetres->links() }}
</div>
@endsection
