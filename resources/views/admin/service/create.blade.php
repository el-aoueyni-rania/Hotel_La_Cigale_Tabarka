@extends('layouts.admin')
@section('main')
<fieldset>
    <legend>
        <i class="fas fa-concierge-bell"></i> Add new service
    </legend>
    
    <form action="{{ route('services.store')}}" method="post">
   @include('admin.service.form')
    </form>
</fieldset>
    
@endsection