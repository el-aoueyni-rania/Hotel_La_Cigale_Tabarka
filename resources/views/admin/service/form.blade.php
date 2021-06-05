@csrf
<div class="row">
<div class="col">
    <div class="form-group">
        <label for="">Nom du service :</label>
        <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" 
        value="{{ $service->nom ?? old('nom') }}" placeholder="enter name">
        @error('nom')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
</div>
<div class="col">
    <div class="form-group">
        <label for="">Type : </label>
        <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
         value="{{ $service->type ?? old('type') }}" placeholder="enter type">
        @error('type')<div class="text-danger">{{ $message }}</div>@enderror
    </div>
</div>
</div>
<div class="col">
<div class="form-group">
    <label for="">user id : </label>
    <input type="text" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror"
     value="{{ $service->user_id ?? old('user_id') }}" placeholder="enter user id">
    @error('user_id')<div class="text-danger">{{ $message }}</div>@enderror
</div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-check-circle"></i> save</button>
    </div>
    <div class="col">
        <button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-ban"></i> cancel</button>
    </div>
</div>