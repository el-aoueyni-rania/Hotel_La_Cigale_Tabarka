@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
            <i class="fas fa-edit"></i> Edit restauration : {{ $restauration ->id}}
        </legend>
        <form action="{{ route('restaurations.update' ,  ['restauration' =>$restauration ->id]) }}" method="post">
            @method('PUT')
            @include('admin.restauration.form');
        </form>
     
    </fieldset>
@endsection