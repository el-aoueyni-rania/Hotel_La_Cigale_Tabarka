@extends('layouts.utilisateur')
<br> <br><br>
@section('content')
<div class="container">
    <div class="justify-content-center">
       <div>
        <h1>Activités</h1>
        <ul class=" lu">
            @foreach ($activites as $key => $activite)
                <li>{{ $activite -> Nom_activités  }}</li>
            @endforeach
        </ul>
       </div>
       
    </div>
</div>
@endsection