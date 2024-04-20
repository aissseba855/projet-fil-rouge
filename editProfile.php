<?php
require_once("connexion.php");
$idP = isset($_GET['idP'])?$_GET['idP']:0;
$req=connexion()->query("SELECT * FROM apprenants WHERE id_profil = $idP");
$req->execute([$idP]);
$donnees = $req->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <link rel="stylesheet" href="./inscription.css">
    <link rel="shorcut icon" href="./image/logoODC.png">
</head>
<body>
    <div class="main">
        <div class="logo">
            
        </div>
        <div class="formulaire">
            <form method="POST" action="updateProfil.php">
                <input type ="hidden" value=" <?php echo $idP ?>" name = "idP">
                <label for="firstname">Nom: <input type="text" id="firstname" value="<?php echo $donnees['Nom'] ?>" name="nom" ></label> <br>
                <label for="secondname">Prenom: <input type="text" id="secondname" value="<?php echo $donnees['Prenom'] ?>" name="prenom"></label> <br>
                <label for="email">email: <input type="email" id="email" value="<?php echo $donnees['email'] ?>" name="email"></label> <br>
                <label for="phonenumber">telephone: <input type="tel" id="phonenumber" value="<?php echo $donnees['telephone'] ?>"  name="number"></label> <br>
                <label for="address">adresse: <input type="text" id="address" value="<?php echo $donnees['adresse'] ?>" name="adresse"></label> <br>
                <label for="referentiel">referentiel: <input type="text" id="referentiel" value="<?php echo $donnees['referentiel'] ?>" name="referentiel"></label> <br>
                <label for="profil">profil: <input type="text" id="profil" value="<?php echo $donnees['profil'] ?>" name="profil"></label> <br>
                <!--<label for="image">photo: <input type="file" name="photo" id="image"></label> <br>-->
                <input type="submit" value="Modifier" id="sbt"> <br>
            </form>
        </div>
    </div>
    
</body>
</html>

