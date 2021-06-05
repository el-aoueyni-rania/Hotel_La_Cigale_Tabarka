@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
            <i class="fas fa-edit"></i> Edit service : {{ $service ->id}}
        </legend>
        <form action="{{ route('services.update' ,  ['service' =>$service ->id]) }}" method="post">
            @method('PUT')
            @include('admin.service.form')
        </form>
     
    </fieldset>
@endsection