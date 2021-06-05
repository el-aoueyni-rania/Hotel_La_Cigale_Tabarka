@csrf
       <div class="form-group">
            <label for="Nom_activités"> Nom de l'activité </label>
            <input type="text" name="Nom_activités" value="{{ $activite ->Nom_activités ?? old('Nom_activités') }}" id="Nom_activités" class="form-control @error('Nom_activités') is-invalid @enderror @error('Nom_activités') is-invalid @enderror" placeholder="Nom de l'activité">
            @error('Nom_activités')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
    
        <div class="form-group">
            <label for="Date_activités"> Date de l'activité </label>
            <input type="date" name="Date_activités" value="{{ $activite ->Date_activités ?? old('Date_activités') }}" id="Date_activités" class="form-control @error('Date_activités') is-invalid @enderror @error('Date_activités') is-invalid @enderror" placeholder="Date de l'activité">
            @error('Date_activités')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="Temps_activités"> Temps de l'activité </label>
            <input type="text" name="Temps_activités" value="{{ $activite ->Temps_activités ?? old('Temps_activités') }}" id="Temps_activités" class="form-control @error('Temps_activités') is-invalid @enderror @error('Temps_activités') is-invalid @enderror" placeholder="Temps de l'activité">
            @error('Temps_activités')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
      
        <div class="form-group">
            <label for="user_id"> utilisateur_id</label>
            <input type="number" name="user_id" value="{{ $activite ->user_id?? old('user_id') }}" id="user_id" class="form-control @error('user_id') is-invalid @enderror @error('user_id') is-invalid @enderror" placeholder="id_user">
            @error('user_id')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-check-circle"></i> save</button>
            </div>
            <div class="col">
                <button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-ban"></i> cancel</button>
            </div>
        </div>