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
                <a href="#" class="btn btn-info">show</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

  </table>
<div class="text-center" style="width=200px">
    {{ $bienetres->links() }}
</div>
@endsection
