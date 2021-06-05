@extends('layouts.admin')

@section('main')
@if (session('deleteService'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('deleteService') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
<a href="{{ route('services.create')}}" class="btn btn-outline-primary  float-right"><i class="fas fa-concierge-bell"></i> Add new service</a>
    <h3><i class="fas fa-concierge-bell"></i> Services</h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col"># </th>
            <th scope="col"><i class="fas fa-user"></i>Nom</th>
            {{-- <th scope="col">type</th> --}}
            <th scope="col"><i class="fas fa-user"></i>#id user</th>
            <th scope="col"><i class="fas fa-wrench"></i>Opérations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $key => $service)
                
            
            <tr>
                <th scope="row">{{ $key }}</th>
                <td>{{ $service->nom }}</td>
                {{-- <td>{{ $service->type}}</td> --}}
                <td>{{ $service->user_id}}</td>
                <td>
                    <a href="{{ route('services.show',['service'=>$service->id] )}}" class="btn btn-info" title="show service : {{ $service ->id }} "><i class="fas fa-info"></i></a>
                    <a href="{{ route('services.edit',['service'=>$service->id] )}}" class="btn btn-warning" title="edit service : {{ $service ->id }} ">
                      <i class="fas fa-user-edit"></i></a>
                    <a href="#" class="btn btn-danger" title=" delete service : {{ $service ->id }} "
                      onclick="event.preventDefault(); document.querySelector('#delete-service-form').submit()">
                      <i class="fas fa-user-minus"></i></a>
                    <form action="{{ route('services.destroy',['service'=>$service->id] )}}" method="post" id="delete-service-form">
                    @csrf
                    @method('DELETE')
                    </form>
                </td>
              </tr>
              @endforeach
        </tbody>
      </table>
      <div class="center">
          {{ $services->links()}}
      </div>
@endsection