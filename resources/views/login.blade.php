<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"> 
    {{-- @vite(["resources/css/style.css"]) --}}
</head>
<body>
    <section>
        <div class="form-box user-form">
            <div class="form-value">
                <h2>Login</h2>
                <form method="post" action="/login" id="loginForm">
                    @csrf
                    <div class="inputbox">
                        <input type="email" name="email" id="loginEmail" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" id="loginPassword" required>
                        <label for="">Mot de passe</label>
                    </div>
                    <div class="button">
                        <input type="submit" name="user-login" id="loginSubmit" value="Connexion">
                    </div>
                    <div class="register">
                        <p>Vous n’avez pas de compte ?  <a href="/register"><span class="text-blue">Inscrivez-vous</span></a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
