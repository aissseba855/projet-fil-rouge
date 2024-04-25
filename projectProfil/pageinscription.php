<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <link rel="stylesheet" href="./inscription.css">
    <link rel="shorcut icon" href="logoODC.png">
</head>
<body>
    <div class="main">
        <div class="logo">
            
        </div>
        <h1>bonjour cher apprenant remplissez votre profil</h1>
        <div class="formulaire">
            <form method="POST" action="crud.php">
                <label for="firstname">prenom: <input type="text" id="firstname" placeholder="votre prenom" name="nom"></label> <br>
                <label for="secondname">Nom: <input type="text" id="secondname" placeholder="votre nom" name="prenom"></label> <br>
                <label for="mail">email: <input type="email" id="email" placeholder="votre adresse mail" name="email"></label> <br>
                <label for="phonenumber">telephone: <input type="tel" id="phonenumber" placeholder="votre numéro de telephone"  name="number"></label> <br>
                <label for="address">adresse: <input type="text" id="address" placeholder="votre adresse" name="adresse"></label> <br>
                <label for="referentiel">referentiel: <input type="text" id="referentiel" placeholder="votre formation" name="referentiel"></label> <br>
                <label for="profil">profil: <input type="text" id="profil" placeholder="votre profil" name="photo"></label> <br>
                <!--<label for="image">photo: <input type="file" name="photo" id="image"></label> <br>-->
                <input type="submit" value="valider" id="sbt"> <br>
            </form>

        </div>
    </div>
    
</body>
</html>