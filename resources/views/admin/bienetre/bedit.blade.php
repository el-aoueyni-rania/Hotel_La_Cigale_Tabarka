@extends('layouts.admin')

@section('main')
<br><br><br>
<fieldset>

    <legend><i class="far fa-edit"></i> Edit Type de Bienetre -> <strong>{{ $bienetre->Type_de_Bienetres_choisie }}</strong></legend>
    <form action="{{ route('bienetres.update', ['bienetre' =>$bienetre])}}" method="post">
        @include('admin.bienetre.form')
    </form>
</fieldset>
@endsection
