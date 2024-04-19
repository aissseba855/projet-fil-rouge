<?php
 require_once('connexion.php');
$idP = isset($_GET['id_profil'])?$_GET['id_profil']:0;
 $req=connexion()->query('SELECT * FROM apprenants');
 $req->execute();
 $donnees=$req->fetch();
 //return($donnees);
?>

<!DOCTYPE HTML>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Mon profil </title>     
    <link rel = "stylesheet" type = "text/css" href="css/style.css">
 </head>
    <body>
        <div class="main">
        <div class= "formulaire">
    <?php while($donnees=$req->fetch()) { ?>

    <div class="showProfil">  
        <p>Nom :<?php echo $donnees['Nom'] ?></p></br>
        <p>Prenom: <?php echo $donnees['Prenom'] ?></p></br>
        <p>Referentiel: <?php echo $donnees['referentiel'] ?></p></br>
        <p>Email: <?php echo $donnees['email'] ?></p></br>
        <p>Telephone: <?php echo $donnees['telephone'] ?></p></br>
        <p>Adresse: <?php echo $donnees['adresse'] ?></p>
        <div class="container">
        <a href="editProfile.php?idP=<?php echo $donnees['id_profil']?>" class="btn">Editer</a>
    </div>
    </div>
    <?php } ?>
    </div>
    </div>
        </div>
    </body>
    </html>