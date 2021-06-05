@csrf
       <div class="form-group">
            <label for="name"> Nom de l'utilisateur </label>
            <input type="text" name="name" value="{{ $user ->name ?? old('name') }}" id="name" class="form-control @error('name') is-invalid @enderror @error('name') is-invalid @enderror" placeholder="name">
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
    
        <div class="form-group">
            <label for="email"> Email de l'utilisateur </label>
            <input type="email" name="email" value="{{ $user ->email ?? old('n') }}" id="email" class="form-control @error('email') is-invalid @enderror @error('email') is-invalid @enderror" placeholder="email">
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="password"> mot de passe de l'utilisateur </label>
            <input type="password" name="password" value="{{ $user ->password ?? old('n') }}" id="paswword" class="form-control @error('password') is-invalid @enderror @error('password') is-invalid @enderror" placeholder="password">
            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-check-circle"></i> save</button>
            </div>
            <div class="col">
                <button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-ban"></i> cancel</button>
            </div>
        </div>