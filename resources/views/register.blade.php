<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="css/style.css">
    {{-- @vite(["resources/css/style.css"]) --}}
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="/register" id="inscriptionForm">
                    @csrf
                    <h2>INSCRIPTION</h2>
                    <div class="inputbox">
                        
                        <input type="text" name="name" id="nom" required>
                        <label for="">Full Name</label>
                    </div>
                  
                    <div class="inputbox">
                        <input type="email" name="email" id="emailValidation" required>
                        <label for="">Email</label>

                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" id="passValidation" required>
                        <label for="">Mot de passe</label>

                    </div>
                    <div class="button">
                        <input type="submit" name="submit" id="valide"  value="Inscrit">
                    </div>

                    <div class="register">
                        <p> Vous avez un compte ?  <a href="/login"><span class="text-bleu">Connectez-vous</span></a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>


       
