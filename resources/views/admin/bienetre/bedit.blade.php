@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
            <i class="fas fa-edit"></i> Edit bienetre : {{ $bienetre ->id}}
        </legend>
        <form action="{{ route('bienetres.update' ,  ['bienetre' =>$bienetre ->id]) }}" method="post">
            @method('PUT')
            @include('admin.bienetre.form')
        </form>
     
    </fieldset>
@endsection
