@extends('layouts.admin')
@section('main')
<br><br><br>
<fieldset>
    <legend><i class="fas fa-user-plus"></i> Add new Bienetre</legend>
    <form action="{{ route('bienetres.store') }}" method="post">
        @include('admin.bienetre.form')
        </form>
</fieldset>
@endsection
