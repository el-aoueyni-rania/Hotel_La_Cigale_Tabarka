@extends('layouts.admin')
@section('main')
    <fieldset>
        <legend>
            <i class="fas fa-edit"></i> Edit restauration : {{ $restauration ->id}}
        </legend>
        <form action="{{ route('restaurations.update' ,  ['restauration' =>$restauration ->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom_restaurant"> Nom du restaurant : </label>
            <input type="text" name="nom_restaurant" value="{{ $restauration ->nom_restaurant }}" id="nom_restaurant" class="form-control @error('nom_restaurant') is-invalid @enderror @error('nom_restaurant') is-invalid @enderror" placeholder="Nom du restaurant">
            @error('nom_restaurant')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="menu"> Menu : </label>
            <input type="text" name="menu" value="{{ $restauration ->menu }}" id="menu" class="form-control @error('menu') is-invalid @enderror" placeholder="Menu">
            @error('menu')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="fruits"> Fruits : </label>
            <input type="text" name="fruits" value="{{ $restauration ->fruits }}" id="fruits" class="form-control @error('fruits') is-invalid @enderror" placeholder="Fruits">
            @error('fruits')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="boissons"> Boissons : </label>
            <input type="text" name="boissons" value="{{ $restauration ->boissons }}" id="boissons" class="form-control @error('boissons') is-invalid @enderror" placeholder="Boissons">
            @error('boissons')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="user_id"> User_id : </label>
            <input type="text" name="user_id" value="{{ $restauration ->user_id }}" id="user_id" class="form-control @error('user_id') is-invalid @enderror" placeholder="User_id">
            @error('user_id')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button>
            </div>
            <div class="col">
                <button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button>
            </div>
        </div>
        </form>
     
    </fieldset>
@endsection