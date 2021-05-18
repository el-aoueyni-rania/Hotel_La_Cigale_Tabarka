@extends('layouts.admin')

@section('main')

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
       
      </div>
    </div>
     
@endsection