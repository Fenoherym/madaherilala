<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="login">
        <div class="login-form">
            <div class="title">
                <h3>Se connecter</h3>
            </div>
            <form action="/register" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Nom</label>
                    <input type="text" class="form-control" placeholder="Votre nom" name="name">
                    @error('name')
                        <div class="invalid-feedback">

                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="votre email" name="email">
                    @error('email')
                        <div class="invalid-feedback">

                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email">Mot de passe</label>
                    <input type="password" class="form-control" placeholder="votre mot de passe" name="password">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Confirmer mot de passe</label>
                    <input type="password" class="form-control" placeholder="votre mot de passe"
                        name="password_confirmation">
                </div>
                <div class="btn-connex">
                    <button type="submit" class="btn-submit">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
