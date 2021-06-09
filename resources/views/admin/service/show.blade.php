@extends('layouts.admin')

@section('main')
@if (session('storeService'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('storeService') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
@if (session('updateService'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('updateService') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
    <h3><i class="fas fa-info"></i> Services details about : <strong> {{ $service->nom }}</strong></h3>
  


    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-concierge-bell"></i> {{ $service->nom }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Type</h6>
       
        <ul class="list-group list-group-flush">
         
          <li class="list-group-item"><strong>{{ $service->type }}</strong></li>
          <br>
          <h6 class="card-subtitle mb-2 text-muted">user id</h6>
        <li class="list-group-item"><strong>{{ $service->user_id }}</strong></li>
        </ul>
        <a href="{{ route('services.edit', ['service'=>$service->id] )}}" class="btn btn-block btn-warning">
          <i class="fas fa-user-edit"></i></a>
          <a href="#" class="btn btn-block btn-danger" title=" delete service : {{ $service ->id }} "
            onclick="event.preventDefault(); document.querySelector('#delete-service-form').submit()">
            <i class="fas fa-user-minus"></i></a>
          <form action="{{ route('services.destroy',['service'=>$service->id] )}}" method="post" id="delete-service-form">
          @csrf
          @method('DELETE')
          </form>
      </div>
    </div>
     
@endsection